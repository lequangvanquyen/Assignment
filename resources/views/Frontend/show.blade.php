@extends('layouts.master')
@section('title', 'Trang Chủ')
@section('content')
    <!-- Start Header Page -->

    <section class="header-page">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="heading wow animated slideInDown" data-wow-duration="1s" data-wow-offset="200">
                            <h5>Blog</h5>
                            <h2>Standard Post</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href='index.html'>Home</a></li>
                            <li class="active">Standard Post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Header Page -->

    <!-- Start Blog -->

    {{-- <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="blog-post single">
                        <div class="blog-post-img-date">
                            <img src="images/barbell-body-bodybuilding-116078.jpg" alt="#">
                            <div class="blog-post-date">25 <span>Nov</span></div>
                            <div class="blog-type"><i class="fa fa-camera"></i></div>
                        </div>
                        <div class="blog-post-info">
                            <h5>Interview with ceo of big data business</h5>
                            <ul class="info">
                                <li><i class="fa fa-user"></i><a href="#" title="Posts by admin"
                                        rel="author">admin</a></li>
                                <li><i class="fa fa-comments"></i><a href="#" class="comment-url">One Comment</a></li>
                            </ul>
                            <div class="post-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat.
                                    <br><br>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat.
                                </p>
                                <div class="custom-paragraph">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum.
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat.
                                </p>
                            </div>
                            <ul class="categories">
                                <li><i class="fa fa-tags"></i><a href="#" rel="category tag">Uncategorized</a></li>
                            </ul>
                            <ul class="tags">
                                <li><span class="tags-title">Tags:</span><span class="no-tags">Video, Audio, Website</span>
                                </li>
                            </ul>
                        </div>
                        <div class="share-post">
                            <label>Share this post: </label>
                            <ul class="social-media pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-author-wrapper media">
                            <div class="media-left post-author-avatar">
                                <img alt="User Avatar" src="images/author-1.jpg" class="avatar img-circle">
                            </div>
                            <div class="media-body post-author-info">
                                <h5>
                                    <span class="nickname">admin</span>
                                </h5>
                                <p>There's No Biography</p>
                                <ul class="post-author-stats">
                                    <li>
                                        <i class="fa fa-comments"></i>
                                        User Posts Count: <span>39</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        User Profile Link: <span class="post-author-profile-link"><a href="#"
                                                title="Posts by admin" rel="author">admin</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="comments-count">4 Comments</h3>
                        <ul class="comments-list">
                            <li class="comment">
                                <article id="comment-1" class="media comment">
                                    <div class="media-left comment-author-avatar">
                                        <img alt="" src="images/author-3.jpg" class="avatar img-circle">
                                    </div>
                                    <div class="media-body comment-body">
                                        <ul class="comment-author-info">
                                            <li class="author-name">
                                                <h5>Jhon Doe</h5>
                                            </li>
                                            <li class="comment-time">
                                                <span class="date">July 26, 2017</span>
                                                <span class="time">1:45 pm</span>
                                            </li>
                                            <li class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#"
                                                    aria-label="Reply to A WordPress Commenter">Reply</a>
                                            </li>
                                        </ul>
                                        <div class="comment-content">
                                            <p>Hi, this is a comment.
                                                To get started with moderating, editing, and deleting comments, please visit
                                                the Comments screen in the dashboard.<br>
                                                Commenter avatars come from</p>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="comment">
                                <article class="media comment">
                                    <div class="media-left comment-author-avatar">
                                        <img alt="" src="images/author-2.jpg" class="avatar img-circle">
                                    </div>
                                    <div class="media-body comment-body">
                                        <ul class="comment-author-info">
                                            <li class="author-name">
                                                <h5>osama</h5>
                                            </li>
                                            <li class="comment-time">
                                                <span class="date">July 28, 2017</span>
                                                <span class="time">12:51 pm</span>
                                            </li>
                                            <li class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                            </li>
                                        </ul>
                                        <div class="comment-content">
                                            <p>Our Mission is dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua Ut ullamco laboris nisi
                                                ut aliquip ex ea commodo consequatDuis aute irure</p>
                                        </div>
                                    </div>
                                </article>
                                <ul class="children">
                                    <li class="comment">
                                        <article class="media comment">
                                            <div class="media-left comment-author-avatar">
                                                <img alt="" src="images/author-3.jpg" class="avatar img-circle">
                                            </div>
                                            <div class="media-body comment-body">
                                                <ul class="comment-author-info">
                                                    <li class="author-name">
                                                        <h5>osama</h5>
                                                    </li>
                                                    <li class="comment-time">
                                                        <span class="date">July 28, 2017</span>
                                                        <span class="time">12:58 pm</span>
                                                    </li>
                                                    <li class="reply">
                                                        <a rel="nofollow" class="comment-reply-link"
                                                            href="#">Reply</a>
                                                    </li>
                                                </ul>
                                                <div class="comment-content">
                                                    <p>Our Mission is dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua Ut
                                                        ullamco laboris nisi ut aliquip ex ea commodo consequatDuis aute
                                                        irure</p>
                                                </div>
                                            </div>
                                        </article>
                                        <ul class="children">
                                            <li class="comment">
                                                <article id="comment-33" class="media comment">
                                                    <div class="media-left comment-author-avatar">
                                                        <img alt="" src="images/author-2.jpg"
                                                            class="avatar img-circle">
                                                    </div>
                                                    <div class="media-body comment-body">
                                                        <ul class="comment-author-info">
                                                            <li class="author-name">
                                                                <h5>osama</h5>
                                                            </li>
                                                            <li class="comment-time">
                                                                <span class="date">July 28, 2017</span>
                                                                <span class="time">12:58 pm</span>
                                                            </li>
                                                            <li class="reply"></li>
                                                        </ul>
                                                        <div class="comment-content">
                                                            <p>Our Mission is dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                aliqua Ut ullamco laboris nisi ut aliquip ex ea commodo
                                                                consequatDuis aute irure</p>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <section class="respond">
                            <h3>Write a comment</h3>
                            <div class="row">
                                <form action="#" method="post" class="comment-form" id="commentform">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input type="text" name="author" class="form-control" id="author"
                                                placeholder="Name *" value="" aria-required="true">
                                            <span class="fa fa-user form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input type="text" name="email" class="form-control" id="email"
                                                placeholder="Email *" value="" aria-required="true">
                                            <span class="fa fa-envelope form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group has-feedback">
                                            <input type="text" name="url" class="form-control" id="url"
                                                placeholder="Website" value="">
                                            <span class="fa fa-globe form-control-feedback"></span>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="comment" class="form-control" id="comment" rows="6" placeholder="Your Comment *"></textarea>
                                        </div>
                                        <button name="submit" class="btn btn-primary" type="submit" id="submit"><i
                                                class="fa fa-paper-plane-o"></i> Post Comment</button>
                                    </div>
                                </form>
                            </div>
                        </section>
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
                                    <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt <i class="fa fa-quote-right"></i></p>
                                    <time datetime="2018-05-18">1 day ago</time>
                                </div>
                                <div class="twit">
                                    <i class="fa fa-twitter"></i>
                                    <h6>@Twitter</h6>
                                    <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt <i class="fa fa-quote-right"></i></p>
                                    <time datetime="2018-05-19">2 day ago</time>
                                </div>
                                <div class="twit">
                                    <i class="fa fa-twitter"></i>
                                    <h6>@Twitter</h6>
                                    <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt <i class="fa fa-quote-right"></i></p>
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
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="blog-post single">
                        <div class="blog-post-img-date">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                            <div class="blog-post-date">
                                {{ $post->published_at ? $post->published_at->format('d <span>M</span>') : '' }}
                            </div>
                            <div class="blog-type">
                                <i class="fa fa-camera"></i>
                            </div>
                        </div>
                        <div class="blog-post-info">
                            <h5>{{ $post->title }}</h5>
                            <ul class="info">
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="#" title="Posts by {{ $post->author->name ?? 'Admin' }}" rel="author">
                                        {{ $post->author ? $post->author->name : 'Admin' }}
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-comments"></i>
                                    <a href="#" class="comment-url">{{ $post->comments_count }}
                                        Comment{{ $post->comments_count > 1 ? 's' : '' }}</a>
                                </li>
                            </ul>
                            <div class="post-content">
                                <p>{!! $post->content !!}</p>
                            </div>
                            <ul class="categories">
                                <li>
                                    <i class="fa fa-tags"></i>
                                    <a href="#"
                                        rel="category tag">{{ $post->category ? $post->category->name : 'Uncategorized' }}</a>
                                </li>
                            </ul>
                            <ul class="tags">
                                <li>
                                    <span class="tags-title">Tags:</span>

                                </li>
                            </ul>
                        </div>
                        <div class="share-post">
                            <label>Share this post: </label>
                            <ul class="social-media pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="post-author-wrapper media">
                            <div class="media-left post-author-avatar">
                                <img alt="User Avatar" src="images/author-1.jpg" class="avatar img-circle">
                            </div>
                            <div class="media-body post-author-info">
                                <h5><span class="nickname">{{ $post->author ? $post->author->name : 'Admin' }}</span></h5>
                                <p>{{ $post->author ? $post->author->biography : 'There\'s No Biography' }}</p>
                                <ul class="post-author-stats">
                                    <li>
                                        <i class="fa fa-comments"></i>
                                        User Posts Count:
                                        <span>{{ $post->author ? $post->author->posts_count : '0' }}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        User Profile Link: <span class="post-author-profile-link">
                                            <a href="#"
                                                title="Posts by {{ $post->author ? $post->author->name : 'Admin' }}"
                                                rel="author">
                                                {{ $post->author ? $post->author->name : 'Admin' }}
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="comments-count">{{ $post->comments_count }}
                            Comment{{ $post->comments_count > 1 ? 's' : '' }}</h3>
                        <ul class="comments-list">
                            @foreach ($post->comments as $comment)
                                <li class="comment">
                                    <article id="comment-{{ $comment->id }}" class="media comment">
                                        <div class="media-left comment-author-avatar">
                                            <img alt="" src="images/author-1.jpg" class="avatar img-circle">
                                        </div>
                                        <div class="media-body comment-body">
                                            <ul class="comment-author-info">
                                                @if ($comment->user)
                                                    <li class="author-name">
                                                        <h5>{{ $comment->user->name }}</h5>
                                                    </li>
                                                @endif
                                                <li class="comment-time">
                                                    <span
                                                        class="date">{{ $comment->created_at->format('F j, Y') }}</span>
                                                    <span class="time">{{ $comment->created_at->format('g:i a') }}</span>
                                                </li>
                                                <li class="reply">
                                                    @if ($comment->user)
                                                        <a rel="nofollow" class="comment-reply-link" href="#"
                                                            aria-label="Reply to {{ $comment->user->name }}">Reply</a>
                                                    @endif
                                                </li>
                                            </ul>
                                            <div class="comment-content">
                                                <p>{{ $comment->content }}</p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            @endforeach

                        </ul>
                        <section class="respond">
                            <h3>Viết bình luận</h3>
                            <div class="row">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif


                                <form action="{{ route('comments.store') }}" method="post" class="comment-form"
                                    id="commentform">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input type="text" name="author" class="form-control" id="author"
                                                placeholder="Name *" value="" aria-required="true" required>
                                            <span class="fa fa-user form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Email *" value="" aria-required="true" required>
                                            <span class="fa fa-envelope form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="comment" class="form-control" id="comment" rows="6" placeholder="Bình luận của bạn *"
                                                required></textarea>
                                        </div>
                                        <button name="submit" class="btn btn-primary" type="submit" id="submit">
                                            <i class="fa fa-paper-plane-o"></i> Đăng bình luận
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="blog-sidebar blog-right-sidebar">
                        <div class="widget about-widget">
                            <h4 class="widget-title">About Me</h4>
                            <div class="author-img-desc">
                                <img src="images/bodybuilder-weight-training-stress-38630.jpg" alt="#">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt</p>
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
                        <div class="widget twitter-widget">
                            <h4 class="widget-title">Twitter Feed</h4>
                            <div class="twitter-feeds">
                                <div id="twitter-feed"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Blog -->

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






@endsection
