@extends('layouts.app')

@section('content')
<div class="coursearea sp_top_100 sp_bottom_100">
    <div class="container">

        <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list" data-aos="fade-up">
            <div class="gridarea__img">
                <a href="course-details.html"><img src="img/grid/grid_1.png" alt="grid"></a>
                <div class="gridarea__small__button">
                    <div class="grid__badge">Data & Tech</div>
                </div>
                <div class="gridarea__small__icon">
                    <a href="#"><i class="icofont-heart-alt"></i></a>
                </div>

            </div>
            <div class="gridarea__content">
                <div class="gridarea__list">
                    <ul>
                        <li>
                            <i class="icofont-book-alt"></i> 23 Lesson
                        </li>
                        <li>
                            <i class="icofont-clock-time"></i> 1 hr 30 min
                        </li>
                    </ul>
                </div>
                <div class="gridarea__heading">
                    <h3><a href="course-details.html">Become a product Manager learn the
                                    skills & job.
                                </a></h3>
                </div>
                <div class="gridarea__price">
                    $32.00 <del>/ $67.00</del>
                    <span>Free.</span>

                </div>
                <div class="gridarea__bottom">
                    <div class="gridarea__bottom__left">
                        <a href="instructor-details.html">
                            <div class="gridarea__small__img">
                                <img src="img/grid/grid_small_1.jpg" alt="grid">
                                <div class="gridarea__small__content">
                                    <h6>Mirnsdo .H</h6>
                                </div>
                            </div>
                        </a>

                        <div class="gridarea__star">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <span>(44)</span>
                        </div>
                    </div>

                    <div class="gridarea__details">
                        <a href="javascript:;">View Course
                                    <i class="icofont-arrow-right"></i>
                                </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="main__pagination__wrapper" data-aos="fade-up">
            <ul class="main__page__pagination">
                <li><a class="disable" href="#"><i class="icofont-double-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-double-right"></i></a></li>
            </ul>
        </div>



    </div>
</div>
@endsection
