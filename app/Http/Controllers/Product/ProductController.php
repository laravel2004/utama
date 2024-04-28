<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageUploadController;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    private Product $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {
            $products = $this->product->all();
            return response()->json($products);
        }
        $products = $this->product->all();
        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('pages.product.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan maksimal ukuran sesuai kebutuhan
                'title' => 'required|string|max:255',
                'slug' => 'required|string|unique:products|max:255',
                'content' => 'required|string',
            ]);    
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $this->product->create([
                'image' => $imageName,
                'title' => $request->title,
                'slug' => $request->slug,
                'content' => $request->content
            ]);

            return redirect()->route('products.index');
        }
        catch(Exception $e) {
            dd($e);
            return response()->json($e->getMessage(), 400);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = $this->product->find($id);
        if(Auth::check()) {
            return view('pages.product.show', compact('product'));
        }
        return view('pages.services.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->product->find($id)->delete();
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
