<div class="widget">
    <div class="widget--title">
        <h2 class="h4">Bình chọn</h2>
        <div class="nav">
            <a href="#" class="prev btn-link" >
                <i class="fa fa-long-arrow-left"></i>
            </a>
            <span class="divider">/</span>
            <a href="#" class="next btn-link">
                <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="poll--widget">
        <ul class="nav">
            <li class="title">
                <h3 class="h4">
                    Theo bạn thì giải đội bóng nào sẽ vô địch WoldCup 2022 ?
                </h3>
            </li>
            <li class="options">
                <form action="#">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option-1">
                            <img src="{{ asset('kcnew/frontend/img/Flag_barzill.png') }}" alt="Brasil" srcset="">
                            <span>Brasil</span>
                        </label>
                        <p>
                            25%<span style="width: 25%;"></span>
                        </p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option-2">
                            <img src="{{ asset('kcnew/frontend/img/Flag_Agrennal.png') }}" alt="Brasil" srcset="">
                            <span>Argentina</span>
                        </label>
                        <p>
                            58%<span style="width: 58%;"></span>
                        </p>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option-2">
                            <img src="{{ asset('kcnew/frontend/img/Flag_tay_ban_nha.png') }}" alt="Brasil" srcset="">
                            <span>Tây Ban Nha</span>
                        </label>
                        <p>
                            12%<span style="width: 12%;"></span>
                        </p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option-2">
                            <img src="{{ asset('kcnew/frontend/img/Flag_bo-dao-nha.png') }}" alt="Brasil" srcset="">
                            <span>Bồ Đào Nha</span>
                        </label>
                        <p>
                            05%<span style="width: 05%;"></span>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-primary">Vote Ngay</button>
                </form>
            </li>
        </ul>
        <div class="preloader bg--color-0--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
</div>