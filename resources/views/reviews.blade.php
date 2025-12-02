@extends('Layouts.master')
@section('content')
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
                        <h3><span class="orange-text">إضافة</span> رآى</h3>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="form-title">
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form method="POST" action="/storeReviews" id="fruitkha-contact" style="direction: rtl;">
                            @csrf
                            <p>
                                <input type="text" style="width: 100%" required placeholder="الاسم" name="name" id="name" value="{{ old('name') }}">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <p style="display: flex">
                                <input type="text" style="width: 50%" required class="ml-4" placeholder="البريد الإلكترونى" name="email" id="email" value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="text" style="width: 50%; direction: rtl; text-align: right;" required placeholder="رقم الهاتف المحمول" name="phone" id="phone" value="{{ old('phone') }}">
                                <span class="text-danger">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <p style="width: 100%;">
                                <input type="text" style="width: 100%;" name="subject" id="subject" required placeholder="عنوان الرسالة" value="{{ old('subject') }}">

                                <span class="text-danger">
                                    @error('subject')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <p>
                            <textarea name="message" id="message" required cols="30" rows="10" placeholder="محتوى الرساله / الرآى" >{{ old('message') }}</textarea>
                                <span class="text-danger">
                                    @error('message')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <p style="text-align: right;"><input type="submit" value="إرسال"></p>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>





	<div class="testimonail-section mt-80 mb-150">
		<div class="container">
                <div class="section-title" style="text-align: center;">
                    <h3><span class="orange-text">آراء</span> العملاء</h3>
                </div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        @foreach ($reviews as $review)
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar1.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>{{ $review->name }} <span>{{ $review->subject }}</span></h3>
                                    <p class="testimonial-body">
                                        {{ $review->message }}
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
				</div>
			</div>
		</div>
	</div>
@endsection
