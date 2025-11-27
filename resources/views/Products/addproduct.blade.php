
@extends('Layouts.master')
@section('content')
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Add</span> Product</h3>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="form-title">
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form type="POST" action="/storeproduct" id="fruitkha-contact">
                            <p>
                                <input type="text" style="width: 100%" placeholder="Name" name="name" id="name">
                            </p>
                            <p style="display: flex">
                                <input type="number" style="width: 50%" class="mr-4" placeholder="Quantity" name="quantity" id="quantity">
                                <input type="number" style="width: 50%" placeholder="Price" name="Price" id="Price">
                            </p>
                            <p><textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea></p>
                            <p><input type="submit" value="Submit"></p>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
@endsection
