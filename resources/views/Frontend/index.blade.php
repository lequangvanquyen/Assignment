@extends('layouts.master')
@section('title', 'Trang Chủ')
@section('content')
    <!-- Start Slider Posts -->

    <section class="posts-slider owl-carousel">

        <div class="post">
            <a href="#"><img src="images/pexels-photo-116078.jpg" alt="#"></a>
            <div class="post-info">
                <div class="post-info-content">
                    <h5><a href="#" title="Nature">Nature</a></h5>
                    <a href="#" class="post-title" title="White Sand of The Desert Discovery">Beautiful Rio de
                        Janeiro</a>
                    <a href="#" class="read-more">read more</a>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-by">by <a href="#">inDesign</a></span>
                <span class="post-date"><a href="#">MARCH 17, 2018</a></span>
            </div>
            <div class="post-overlay"></div>
        </div>
        <div class="post">
            <a href="#"><img src="images/pexels-photo-116079.jpg" alt="#"></a>
            <div class="post-info">
                <div class="post-info-content">
                    <h5><a href="#" title="Nature">Nature</a></h5>
                    <a href="#" class="post-title" title="White Sand of The Desert Discovery">How Astronauts
                        Live</a>
                    <a href="#" class="read-more">read more</a>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-by">by <a href="#">inDesign</a></span>
                <span class="post-date"><a href="#">MARCH 17, 2018</a></span>
            </div>
            <div class="post-overlay"></div>
        </div>
        <div class="post">
            <a href="#"><img src="images/pexels-photo.jpg" alt="#"></a>
            <div class="post-info">
                <div class="post-info-content">
                    <h5><a href="#" title="Nature">Nature</a></h5>
                    <a href="#" class="post-title" title="White Sand of The Desert Discovery">Trendy Summer
                        Fashion</a>
                    <a href="#" class="read-more">read more</a>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-by">by <a href="#">inDesign</a></span>
                <span class="post-date"><a href="#">MARCH 17, 2018</a></span>
            </div>
            <div class="post-overlay"></div>
        </div>
        <div class="post">
            <a href="#"><img src="images/pexels-photo-116078.jpg" alt="#"></a>
            <div class="post-info">
                <div class="post-info-content">
                    <h5><a href="#" title="Nature">Nature</a></h5>
                    <a href="#" class="post-title" title="White Sand of The Desert Discovery">Beautiful Sea at
                        Sunset</a>
                    <a href="#" class="read-more">read more</a>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-by">by <a href="#">inDesign</a></span>
                <span class="post-date"><a href="#">MARCH 17, 2018</a></span>
            </div>
            <div class="post-overlay"></div>
        </div>
        <div class="post">
            <a href="#"><img src="images/pexels-photo-775325.jpg" alt="#"></a>
            <div class="post-info">
                <div class="post-info-content">
                    <h5><a href="#" title="Nature">Nature</a></h5>
                    <a href="#" class="post-title" title="White Sand of The Desert Discovery">White Sand of The
                        Desert
                        Discovery</a>
                    <a href="#" class="read-more">read more</a>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-by">by <a href="#">inDesign</a></span>
                <span class="post-date"><a href="#">MARCH 17, 2018</a></span>
            </div>
            <div class="post-overlay"></div>
        </div>
        <div class="post">
            <a href="#"><img src="images/pexels-photo.jpg" alt="#"></a>
            <div class="post-info">
                <div class="post-info-content">
                    <h5><a href="#" title="Nature">Nature</a></h5>
                    <a href="#" class="post-title" title="White Sand of The Desert Discovery">Hammock Camping
                        Tips</a>
                    <a href="#" class="read-more">read more</a>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-by">by <a href="#">inDesign</a></span>
                <span class="post-date"><a href="#">MARCH 17, 2018</a></span>
            </div>
            <div class="post-overlay"></div>
        </div>
        <div class="post">
            <a href="#"><img src="images/pexels-photo-775325.jpg" alt="#"></a>
            <div class="post-info">
                <div class="post-info-content">
                    <h5><a href="#" title="Nature">Nature</a></h5>
                    <a href="#" class="post-title" title="White Sand of The Desert Discovery">White Sand of The
                        Desert
                        Discovery</a>
                    <a href="#" class="read-more">read more</a>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-by">by <a href="#">inDesign</a></span>
                <span class="post-date"><a href="#">MARCH 17, 2018</a></span>
            </div>
            <div class="post-overlay"></div>
        </div>
    </section>




    <!-- End Slider Posts -->

    <!-- Start Trending Posts-->

    <section class="trending-posts">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <div class="heading">
                        <h5>Xu hướng</h5>
                        <h2>Xu hướng</h2>
                        <p>Xu hướng hiện nay trong ngành gym là tập luyện chức năng kết hợp với công nghệ thông minh, nhằm
                            tối ưu hóa hiệu quả tập luyện và cải thiện sức khỏe tổng thể</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-4 has-m">
                    <div class="post">
                        <a href="#"><img src="images/pexels-photo-927437.jpg" alt="#"></a>
                        <div class="post-info">
                            <h5><a href="#">Nature</a></h5>
                            <a href="#" class="post-title" title="A penguin bicycled behind an escalator">A
                                penguin bicycled behind an
                                escalator</a>
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do
                                not know how to pursue pleasure rationally encounter consequences that are extremely
                                pleasure...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 has-m">
                    <div class="post">
                        <a href="#"><img src="images/body-crossfit-dark-116079.jpg" alt="#"></a>
                        <div class="post-info">
                            <h5><a href="#">Nature</a></h5>
                            <a href="#" class="post-title" title="A penguin bicycled behind an escalator">A
                                penguin bicycled behind an
                                escalator</a>
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do
                                not know how to pursue pleasure rationally encounter consequences that are extremely
                                pleasure...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 has-m"">
                    <div class="post">
                        <a href="#"><img src="images/pexels-photo-136410.jpg" alt="#"></a>
                        <div class="post-info">
                            <h5><a href="#">Nature</a></h5>
                            <a href="#" class="post-title" title="A penguin bicycled behind an escalator">A
                                penguin bicycled behind an
                                escalator</a>
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do
                                not know how to pursue pleasure rationally encounter consequences that are extremely
                                pleasure...</p>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-sm-4 mb-4">
                        <div class="post bg-white shadow-md rounded-lg overflow-hidden">
                            <a href="{{ route('chitiet', $post->id) }}">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="w-full h-48 object-cover">
                            </a>
                            <div class="post-info p-4">
                                <h5 class="text-lg font-semibold mb-2">
                                    <a href="#"
                                        class="text-blue-500 hover:underline">{{ $post->category->name ?? 'Chưa phân loại' }}</a>
                                </h5>
                                <a href="{{ route('chitiet', $post->id) }}"
                                    class="post-title text-xl font-bold mb-2 block" title="{{ $post->title }}">
                                    {{ $post->title }}
                                </a>
                                <p class="text-gray-700">{{ Str::limit($post->content, 100) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>





        </div>
    </section>

    <!-- End Trending Posts-->

    <!-- Start Posts -->

    {{-- <section class="blog">
        <div class="container">
            <div class="row">



                <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-post">
                                <div class="blog-post-img-date">
                                    <img src="images/post-10.jpg" alt="#">
                                    <div class="blog-post-date">25 <span>Nov</span></div>
                                    <div class="blog-type"><i class="fa fa-camera"></i></div>
                                </div>
                                <div class="blog-post-info">
                                    <h5>Interview with ceo of big data business</h5>
                                    <ul class="info">
                                        <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                rel="author">admin</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                Comment</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <p>
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who
                                            do not know how to pursue pleasure rationally encounter consequences that are
                                            extremely
                                            pleasure...
                                        </p>
                                    </div>
                                    <ul class="categories">
                                        <li><i class="fa fa-tags"></i><a href="#"
                                                rel="category tag">Uncategorized</a></li>
                                    </ul>
                                    <ul class="tags">
                                        <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                Website</span></li>
                                    </ul>
                                    <div class="read-more">
                                        <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-post">
                                <div class="blog-post-img-date">
                                    <img src="images/post-3.jpg" alt="#">
                                    <div class="blog-post-date">25 <span>Nov</span></div>
                                    <div class="blog-type"><i class="fa fa-video-camera"></i></div>
                                    <div class="video-link">
                                        <a href="#"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="blog-post-info">
                                    <h5>Interview with ceo of big data business</h5>
                                    <ul class="info">
                                        <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                rel="author">admin</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                Comment</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <p>
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who
                                            do not know how to pursue pleasure rationally encounter consequences that are
                                            extremely
                                            pleasure...
                                        </p>
                                    </div>
                                    <ul class="categories">
                                        <li><i class="fa fa-tags"></i><a href="#"
                                                rel="category tag">Uncategorized</a></li>
                                    </ul>
                                    <ul class="tags">
                                        <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                Website</span></li>
                                    </ul>
                                    <div class="read-more">
                                        <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="owl-carousel owl-theme">
                                <div class="blog-post">
                                    <div class="blog-post-img-date">
                                        <img src="images/post-1.jpg" alt="#">
                                        <div class="blog-post-date">25 <span>Nov</span></div>
                                        <div class="blog-type"><i class="fa fa-sliders"></i></div>
                                    </div>
                                    <div class="blog-post-info">
                                        <h5>Interview with ceo of big data business</h5>
                                        <ul class="info">
                                            <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                    rel="author">admin</a></li>
                                            <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                    Comment</a></li>
                                        </ul>
                                        <div class="post-content">
                                            <p>
                                                No one rejects, dislikes, or avoids pleasure itself, because it is
                                                pleasure, but because those
                                                who do not know how to pursue pleasure rationally encounter consequences
                                                that are extremely
                                                pleasure...
                                            </p>
                                        </div>
                                        <ul class="categories">
                                            <li><i class="fa fa-tags"></i><a href="#"
                                                    rel="category tag">Uncategorized</a></li>
                                        </ul>
                                        <ul class="tags">
                                            <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                    Website</span></li>
                                        </ul>
                                        <div class="read-more">
                                            <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post">
                                    <div class="blog-post-img-date">
                                        <img src="images/post-5.jpg" alt="#">
                                        <div class="blog-post-date">25 <span>Nov</span></div>
                                        <div class="blog-type"><i class="fa fa-sliders"></i></div>
                                    </div>
                                    <div class="blog-post-info">
                                        <h5>Interview with ceo of big data business</h5>
                                        <ul class="info">
                                            <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                    rel="author">admin</a></li>
                                            <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                    Comment</a></li>
                                        </ul>
                                        <div class="post-content">
                                            <p>
                                                No one rejects, dislikes, or avoids pleasure itself, because it is
                                                pleasure, but because those
                                                who do not know how to pursue pleasure rationally encounter consequences
                                                that are extremely
                                                pleasure...
                                            </p>
                                        </div>
                                        <ul class="categories">
                                            <li><i class="fa fa-tags"></i><a href="#"
                                                    rel="category tag">Uncategorized</a></li>
                                        </ul>
                                        <ul class="tags">
                                            <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                    Website</span></li>
                                        </ul>
                                        <div class="read-more">
                                            <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-post">
                                    <div class="blog-post-img-date">
                                        <img src="images/post-6.jpg" alt="#">
                                        <div class="blog-post-date">25 <span>Nov</span></div>
                                        <div class="blog-type"><i class="fa fa-sliders"></i></div>
                                    </div>
                                    <div class="blog-post-info">
                                        <h5>Interview with ceo of big data business</h5>
                                        <ul class="info">
                                            <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                    rel="author">admin</a></li>
                                            <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                    Comment</a></li>
                                        </ul>
                                        <div class="post-content">
                                            <p>
                                                No one rejects, dislikes, or avoids pleasure itself, because it is
                                                pleasure, but because those
                                                who do not know how to pursue pleasure rationally encounter consequences
                                                that are extremely
                                                pleasure...
                                            </p>
                                        </div>
                                        <ul class="categories">
                                            <li><i class="fa fa-tags"></i><a href="#"
                                                    rel="category tag">Uncategorized</a></li>
                                        </ul>
                                        <ul class="tags">
                                            <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                    Website</span></li>
                                        </ul>
                                        <div class="read-more">
                                            <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-post">
                                <div class="blog-post-img-date">
                                    <img src="images/post-7.jpg" alt="#">
                                    <div class="blog-post-date">25 <span>Nov</span></div>
                                    <div class="blog-type"><i class="fa fa-camera"></i></div>
                                </div>
                                <div class="blog-post-info">
                                    <h5>Interview with ceo of big data business</h5>
                                    <ul class="info">
                                        <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                rel="author">admin</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                Comment</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <p>
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who
                                            do not know how to pursue pleasure rationally encounter consequences that are
                                            extremely
                                            pleasure...
                                        </p>
                                    </div>
                                    <ul class="categories">
                                        <li><i class="fa fa-tags"></i><a href="#"
                                                rel="category tag">Uncategorized</a></li>
                                    </ul>
                                    <ul class="tags">
                                        <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                Website</span></li>
                                    </ul>
                                    <div class="read-more">
                                        <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-post">
                                <div class="blog-post-img-date">
                                    <img src="images/post-8.jpg" alt="#">
                                    <div class="blog-post-date">25 <span>Nov</span></div>
                                    <div class="blog-type"><i class="fa fa-camera"></i></div>
                                </div>
                                <div class="blog-post-info">
                                    <h5>Interview with ceo of big data business</h5>
                                    <ul class="info">
                                        <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                rel="author">admin</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                Comment</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <p>
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who
                                            do not know how to pursue pleasure rationally encounter consequences that are
                                            extremely
                                            pleasure...
                                        </p>
                                    </div>
                                    <ul class="categories">
                                        <li><i class="fa fa-tags"></i><a href="#"
                                                rel="category tag">Uncategorized</a></li>
                                    </ul>
                                    <ul class="tags">
                                        <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                Website</span></li>
                                    </ul>
                                    <div class="read-more">
                                        <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-post">
                                <div class="blog-post-img-date">
                                    <img src="images/post-9.jpg" alt="#">
                                    <div class="blog-post-date">25 <span>Nov</span></div>
                                    <div class="blog-type"><i class="fa fa-camera"></i></div>
                                </div>
                                <div class="blog-post-info">
                                    <h5>Interview with ceo of big data business</h5>
                                    <ul class="info">
                                        <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                rel="author">admin</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                Comment</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <p>
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who
                                            do not know how to pursue pleasure rationally encounter consequences that are
                                            extremely
                                            pleasure...
                                        </p>
                                    </div>
                                    <ul class="categories">
                                        <li><i class="fa fa-tags"></i><a href="#"
                                                rel="category tag">Uncategorized</a></li>
                                    </ul>
                                    <ul class="tags">
                                        <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                Website</span></li>
                                    </ul>
                                    <div class="read-more">
                                        <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-post">
                                <div class="blog-post-img-date">
                                    <img src="images/post-2.jpg" alt="#">
                                    <div class="blog-post-date">25 <span>Nov</span></div>
                                    <div class="blog-type"><i class="fa fa-camera"></i></div>
                                </div>
                                <div class="blog-post-info">
                                    <h5>Interview with ceo of big data business</h5>
                                    <ul class="info">
                                        <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                rel="author">admin</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                Comment</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <p>
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who
                                            do not know how to pursue pleasure rationally encounter consequences that are
                                            extremely
                                            pleasure...
                                        </p>
                                    </div>
                                    <ul class="categories">
                                        <li><i class="fa fa-tags"></i><a href="#"
                                                rel="category tag">Uncategorized</a></li>
                                    </ul>
                                    <ul class="tags">
                                        <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                Website</span></li>
                                    </ul>
                                    <div class="read-more">
                                        <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-post">
                                <div class="blog-post-img-date">
                                    <img src="images/post-1.jpg" alt="#">
                                    <div class="blog-post-date">25 <span>Nov</span></div>
                                    <div class="blog-type"><i class="fa fa-camera"></i></div>
                                </div>
                                <div class="blog-post-info">
                                    <h5>Interview with ceo of big data business</h5>
                                    <ul class="info">
                                        <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                                rel="author">admin</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One
                                                Comment</a></li>
                                    </ul>
                                    <div class="post-content">
                                        <p>
                                            No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who
                                            do not know how to pursue pleasure rationally encounter consequences that are
                                            extremely
                                            pleasure...
                                        </p>
                                    </div>
                                    <ul class="categories">
                                        <li><i class="fa fa-tags"></i><a href="#"
                                                rel="category tag">Uncategorized</a></li>
                                    </ul>
                                    <ul class="tags">
                                        <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio,
                                                Website</span></li>
                                    </ul>
                                    <div class="read-more">
                                        <a href='standard-post.html'>Read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>







                    <div class="col-md-3 col-sm-4">
                        <div class="blog-sidebar blog-right-sidebar">
                            <div class="widget about-widget">
                                <h4 class="widget-title">About Me</h4>
                                <div class="author-img-desc">
                                    <img src="images/bodybuilder-weight-training-stress-38630.jpg" alt="#">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt
                                    </p>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Follow Me</h4>
                                <ul class="social-media-follow">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Banner</h4>
                                <a href="#">
                                    <img src="images/banner.jpg" alt="#">
                                </a>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Popular posts</h4>
                                <div class="media popular-post">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/small-post.jpg" alt="#">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <span><i class="fa fa-calendar"></i> 22 Nov 2017</span>
                                        <h5 class="media-heading">Organize Your Life with 10 Simple Rules</h5>
                                    </div>
                                </div>
                                <div class="media popular-post">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/small-post.jpg" alt="#">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <span><i class="fa fa-calendar"></i> 22 Nov 2017</span>
                                        <h4 class="media-heading">Organize Your Life with 10 Simple Rules</h4>
                                    </div>
                                </div>
                                <div class="media popular-post">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/small-post.jpg" alt="#">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <span><i class="fa fa-calendar"></i> 22 Nov 2017</span>
                                        <h5 class="media-heading">Organize Your Life with 10 Simple Rules</h5>
                                    </div>
                                </div>
                                <div class="media popular-post">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/small-post.jpg" alt="#">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <span><i class="fa fa-calendar"></i> 22 Nov 2017</span>
                                        <h5 class="media-heading">Organize Your Life with 10 Simple Rules</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Twitter</h4>
                                <div class="twitter-carousel owl-carousel">
                                    <div class="twit">
                                        <i class="fa fa-twitter"></i>
                                        <h6>@Twitter</h6>
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit, sed do
                                            eiusmod tempor incididunt <i class="fa fa-quote-right"></i></p>
                                        <time datetime="2018-05-18">1 day ago</time>
                                    </div>
                                    <div class="twit">
                                        <i class="fa fa-twitter"></i>
                                        <h6>@Twitter</h6>
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit, sed do
                                            eiusmod tempor incididunt <i class="fa fa-quote-right"></i></p>
                                        <time datetime="2018-05-19">2 day ago</time>
                                    </div>
                                    <div class="twit">
                                        <i class="fa fa-twitter"></i>
                                        <h6>@Twitter</h6>
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit, sed do
                                            eiusmod tempor incididunt <i class="fa fa-quote-right"></i></p>
                                        <time datetime="2018-05-20">3 day ago</time>
                                    </div>
                                </div>
                            </div>
                            <div class="widget instagram-widget">
                                <h4 class="widget-title">Instagram</h4>
                                <ul>
                                    <li><a href="#"><img src="images/instagram-1.jpg" alt="#"></a></li>
                                    <li><a href="#"><img src="images/instagram-2.jpg" alt="#"></a></li>
                                    <li><a href="#"><img src="images/instagram-3.jpg" alt="#"></a></li>
                                    <li><a href="#"><img src="images/instagram-4.jpg" alt="#"></a></li>
                                    <li><a href="#"><img src="images/instagram-5.jpg" alt="#"></a></li>
                                    <li><a href="#"><img src="images/instagram-3.jpg" alt="#"></a></li>
                                    <li><a href="#"><img src="images/instagram-2.jpg" alt="#"></a></li>
                                    <li><a href="#"><img src="images/instagram-4.jpg" alt="#"></a></li>
                                    <li><a href="#"><img src="images/instagram-5.jpg" alt="#"></a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Tag Cloud</h4>
                                <ul class="tags">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Images</a></li>
                                    <li><a href="#">Youtube</a></li>
                                    <li><a href="#">Video</a></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </div>
                            <div class="widget subscribe-widget">
                                <h4 class="widget-title">Subscribe</h4>
                                <p>Follow my latest news</p>
                                <form action="#">
                                    <input class="form-control" type="email" name="email" size="32"
                                        placeholder="Your email">
                                    <button class="btn" name="submit"><i class="fa fa-envelope-o"></i></button>
                                    <span></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}

    <!-- End Posts -->

    <!-- Start Instagram Section -->

    <div class="instagram-section">
        <div class="owl-carousel owl-theme">
            <div class="instagram-img">
                <img src="images/instagram-1-2.jpg" alt="#">
                <div class="overlay">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="instagram-img">
                <img src="images/instagram-1-1.jpg" alt="#">
                <div class="overlay">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="instagram-img">
                <img src="images/instagram-1-3.jpg" alt="#">
                <div class="overlay">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="instagram-img">
                <img src="images/instagram-1-4.jpg" alt="#">
                <div class="overlay">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="instagram-img">
                <img src="images/instagram-1-5.jpg" alt="#">
                <div class="overlay">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="instagram-img">
                <img src="images/instagram-1-6.jpg" alt="#">
                <div class="overlay">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="instagram-img">
                <img src="images/instagram-1-2.jpg" alt="#">
                <div class="overlay">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="instagram-img">
                <img src="images/instagram-1-5.jpg" alt="#">
                <div class="overlay">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Instagram Section -->
@endsection
