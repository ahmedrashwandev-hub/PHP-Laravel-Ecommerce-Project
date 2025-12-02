
@extends('Layouts.master')
@section('content')
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">إضافة</span> منتج</h3>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="form-title">
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form method="POST" action="/storeproduct" id="fruitkha-contact" style="direction: rtl;">
                            @csrf
                            <p>
                                <input type="hidden" style="width: 100%" placeholder="" name="id" id="id" value="{{ $product->id }}">
                                <input type="text" style="width: 100%" required placeholder="الاسم" name="name" id="name" value="{{ $product->name }}">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <p style="display: flex">
                                <input type="number" style="width: 50%" required class="ml-4" placeholder="الكمية" name="quantity" id="quantity" value="{{ $product->quantity }}">
                                <span class="text-danger">
                                    @error('quantity')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="number" style="width: 50%" required placeholder="السعر" name="price" id="Price" value="{{ $product->price }}">
                                <span class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <p>
                                <textarea name="description" id="description" required cols="30" rows="10" placeholder="الوصف" >{{ $product->description }}</textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <p>
                                <select class="form-control" required name="category_id" id="category_id">
                                    @foreach ($allcategories as $category)
                                        @if ($category->id == $product->category_id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('category_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <p><input type="submit" value="إرسال"></p>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
@endsection
