<?php
    if( !function_exists('getColorClass' )){
        function getColorClass($index)
        {
            switch ($index) {
                case 1:
                    return 'blue';
                case 2:
                    return 'oranges';
                case 3:
                    return 'green';
                case 4:
                    return 'purple';
                case 5:
                    return 'yellow_o';
                case 6:
                    return 'red_p';
                default:
                    return '';
            }
        }
    }
?>
<section class="searchcity">
    <div class="container">
        <div class="row">
            <div class="page-amount col-lg-4">
                <i class="fa fas far fa-map-marker"></i>Khu vực đang xem:
            </div>
            <div class="col-lg-4 styled-select">
                <select name="tinh3" id="tinh3" class="select-province">
                    <option value="">-- Chọn --</option>
                    @foreach ($provinces as $key => $value)
                    <option value="{{ url()->current() .'?'. 'locationId='.$key}}"
                        {{ request()->get('locationId') == $key ? 'selected' : '' }}>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</section>

<div class="pricing pricing--shop1" id="internet-fpt">
    <div class="container">
        <div class="row">
            <div class="pricing__title">
                <img alt="Combo Internet &amp; Truyền hình FPT"
                    src="{{ v(theme::url('assets/images/icon/combo net tv fpt.png')) }}">
                <a href="{{ route('pages.internetFpt') }}">Combo internet & Truyền hình FPT</a>
            </div>
        </div>
        <div class="pricing--4 slick-custom slick-custom-default">
            <?php
                $index = 1;
            ?>
            @foreach ($services as $item)
            <div class="pricing__col {{ getColorClass($index) }}">
                <div class="pricing__inner">
                    <div class="top">
                        <div>
                             @if($item->is_show_title)
                            {!! $item->title !!}
                            @else
                            <div class="img-combo"><span><img alt="" src="{{ $item->base_image->path }}"></span>
                            </div>
                            @endif
                            <div class="price">
                                @if($area_id != null)
                                    @if ($item->areas($area_id)->count() > 0)
                                        @if ($item->areas($area_id)->orderBy('price_area','ASC')->first()->pivot->price_area_discount)
                                            <h4>{{ number_format($item->areas($area_id)->orderBy('price_area','ASC')->first()->pivot->price_area_discount,0,",",".") }}
                                            </h4>
                                        @else
                                            <h4>{{ number_format($item->areas($area_id)->orderBy('price_area','ASC')->first()->pivot->price_area,0,",",".") }}
                                            </h4>
                                        @endif
                                    @else
                                        <h4>{{ number_format($item->price->amount(),0,",",".") }}</h4>
                                    @endif
                                @else
                                    <h4>{{ number_format($item->price->amount(),0,",",".") }}</h4>
                                @endif
                                <span>vnđ/ tháng</span>
                                <p><b>{{$item->bandwidth}}</b>
                                    @if(is_numeric($item->bandwidth)) Mbps @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="top">
                        <div>
                             @if($item->is_show_title)
                            {!! $item->title !!}
                            @else
                            <div class="img-combo"><span><img alt="" src="{{ $item->base_image->path }}"></span>
                            </div>
                            @endif
                            <div class="price">
                                @if($area_id != null)
                                @if ($item->areas($area_id)->count() > 0)
                                <h4>{{ number_format($item->areas($area_id)->orderBy('price_area','ASC')->first()->pivot->price_area, 0, ',', '.') }}
                                </h4>
                                @else
                                <h4>{{ number_format($item->price->amount(),0,",",".") }}</h4>
                                @endif
                                @else
                                <h4>{{ number_format($item->price->amount(),0,",",".") }}</h4>
                                @endif
                                <span>vnđ/ tháng</span>
                                <p><b>{{$item->bandwidth}}</b>
                                    @if(is_numeric($item->bandwidth)) Mbps @endif
                                </p>
                            </div>
                        </div>
                    </div> --}}
                    {!! $item->feature !!}
                    <div class="bottom">
                        @if($item->bonus)
                            {!! $item->bonus !!}
                        @else
                            <p>Mức giá trên đã bao gồm VAT. Giá này sẽ thay đổi theo khu vực, theo từng thời điểm.</p>
                        @endif
                        <a href="#" data-toggle="modal" data-target="#modalRegisterService">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
            <?php
                $index++;
            ?>
            @endforeach
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#tinh3').select2();
    });
</script>
