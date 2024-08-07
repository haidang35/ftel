@extends('public.account.layout')
@section('sub_content')
    <div>
        <div class="text-center ">
            <h2 >Thông tin tài khoản</h2>
        </div>
        <div class="mt-3">
            <form method="GET" action="#">
                @csrf
                <div class="form-row form-group">
                    <div class="col">
                        <label for="last_name">Họ, tên đệm<span class="text-danger">*</span></label>
                        <input type="text" id="last_name" name="last_name" value="{{ $user->last_name }}" class="form-control @error('last_name') is-invalid @enderror" placeholder="Enter last name">
                        @error('last_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="first_name">Tên<span class="text-danger">*</span></label>
                        <input type="text" id="first_name" name="first_name" value="{{ $user->first_name }}" class="form-control @error('first_name') is-invalid @enderror" placeholder="Enter first name">
                        @error('first_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại<span class="text-danger">*</span></label>
                    <input type="tel" id="phone" name="phone" value="{{ $user->phone_number }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Địa chỉ email<span class="text-danger">*</span></label>
                    <input type="email" disabled id="email" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
