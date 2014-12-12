<?php include 'functions.php'; get_header(); ?>
<?php get_container_open(); ?>



		<!-- ///// SINGLE BLOG POST ///// -->

		<div class="blog-single">
			<div class="container">				
	<!-- main columnn -->
	<article class="article-column">

		<!-- image, title, meta and excerpt -->
		<div class="media">
			<img src="http://placehold.it/800x600" alt="">
		</div>

		<div class="title">
			<h2>This is the blog post title.</h2>
		</div>	

		<div class="meta">
	by <span class="autor"><a href="#">admin</a></span> on <span class="date"><a href="#">18th August 2014</a></span> in <span class="categories"><a href="#">news</a>, <a href="#">competitions</a> | <span class="comments"><a href="#">4 Comments</a></span></span>
</div>
		<p class="post-intro">Why should you go with Neat? We've been discussing the topic rather heavily as of late, and here are a few good reasons.</p>
		

		<!-- the content -->
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus repudiandae provident eaque esse? Laboriosam aut ex voluptatem vitae blanditiis, ad est nihil distinctio, aliquid, vel, cupiditate dolorem sit obcaecati molestias.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum tempore error ad nesciunt minima ratione fuga id totam, labore asperiores rerum dolorem fugit neque sequi, quo delectus laborum animi velit.</p>

		<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam et, possimus nihil officia, optio facilis libero adipisci tempora architecto eum. Maxime explicabo, consectetur officia at iusto est iste. Quo.</blockquote>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quidem odit, cumque corrupti quas, distinctio veniam vero voluptatum animi culpa! Quo nihil placeat quod labore, tenetur quas suscipit id quasi.</p>

		<div class="post-tags">
	<h3>Tags: </h3>
	<span><a href="#">mountains</a></span>
	<span><a href="#">New Zealand</a></span>				
	<span><a href="#">Summer</a></span>
</div>
		<div class="author-box">
    <div class="author-avatar">
        <a href="#"><img src="http://placehold.it/80x80" alt=""></a>
    </div>
    <div class="author-bio">
        <h3>Author: <a href="#">John Westbrook</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus inventore ipsum, ullam necessitatibus hic, quis itaque fugit accusamus, in suscipit placeat nemo, blanditiis harum voluptas dolorem sequi quos error atque.</p>
    </div>
</div>

<div class="title">
    <h3>4 Comments. <a href="#section-comment-form">Add yours.</a></h3>
    <hr class="small">
</div>

<ul class="comments">

    <li class="comment">
        <div class="comment-image">
            <img src="http://placehold.it/80x80" alt="">
        </div>
        <div class="comment-content">
            <h2><a href="#">Jessica Smith</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, aspernatur, quia modi minima debitis tempora ducimus quam vero impedit alias earum nemo error tenetur sed.</p>
            <p class="comment-detail">Date or details about this post</p>
        </div>
    </li>

    <li class="comment level-1">
        <div class="comment-image">
            <img src="http://placehold.it/80x80" alt="">
        </div>
        <div class="comment-content">
            <h2><a href="#">Alex Johnson</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, aspernatur, quia modi minima debitis tempora ducimus quam vero impedit alias earum nemo error tenetur sed.</p>
            <p class="comment-detail">Date or details about this post</p>
        </div>
    </li>

    <li class="comment level-2">
        <div class="comment-image">
            <img src="http://placehold.it/80x80" alt="">
        </div>
        <div class="comment-content">
            <h2><a href="#">Jimmy Jones</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, aspernatur, quia modi minima debitis tempora ducimus quam vero impedit alias earum nemo error tenetur sed.</p>
            <p class="comment-detail">Date or details about this post</p>
        </div>
    </li>

    <li class="comment">
        <div class="comment-image">
           <img src="http://placehold.it/80x80" alt="">
        </div>
        <div class="comment-content">
            <h2><a href="#">Monica Stewart</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, aspernatur, quia modi minima debitis tempora ducimus quam vero impedit alias earum nemo error tenetur sed.</p>
            <p class="comment-detail">Date or details about this post</p>
        </div>
    </li>
    
</ul>

<div id="section-comment-form" class="title">
    <h3>Add a Comment</h3>
    <hr class="small">
</div>

<div class="comment-form">
                    
    <!-- contact form -->
    <form id="comment-form" novalidate>

        <div class="form">
            <div class="form-left">
     
                <p><label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name..."></p>

                <p><label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="E-mail..."></p>

                <p><label for="website">Website</label>
                <input type="text" name="website" id="website" placeholder="Website..."></p>

            </div>

            <div class="form-right">

                <p><label for="message">Message</label>
                <textarea name="message" id="message" rows="10" placeholder="Comment away..."></textarea></p>

            </div>
        </div>

        <div id="contact-error"></div>

        <p class="submit"><input class="button" type="submit" value="Post Comment"></p>

    </form><!-- end form -->
    
</div>		
	</article>

		<!-- sidebar -->
		<aside class="sidebar">

			<!-- categories widget -->
			<div class="widget-wrapper">
				<div class="widget-title">
					<h4>Categories</h4>
				</div>

				<ul class="blog-categories">
					<li><a href="#">News</a></li>
					<li><a href="#">Special Anouncements</a></li>
					<li><a href="#">Competitions</a></li>
					<li><a href="#">User Stories</a></li>
				</ul>
			</div>

			<!-- search widget -->
			<div class="widget-wrapper">
				<div class="widget-title">
					<h4>Search</h4>
				</div>

				<form>
					<input class="search-widget" type="text" name="search" id="search" placeholder="type and hit enter...">	
				</form>
			</div>

			<!-- tags widget -->
			<div class="widget-wrapper">
				<div class="widget-title">
					<h4>Tags</h4>
				</div>

				<div class="blog-tags">
					<span><a href="#">mountains</a></span>
					<span><a href="#">New Zealand</a></span>
					<span><a href="#">Switzerland</a></span>
					<span><a href="#">Summer</a></span>
					<span><a href="#">Winter</a></span>
					<span><a href="#">sports</a></span>
					<span><a href="#">another one</a></span>
					<span><a href="#">tags are cool!</a></span>
					<span><a href="#">tutorial</a></span>
					<span><a href="#">showcase</a></span>
				</div>
			</div>

		</aside>
	</div>
</div>
<!-- ///// FOOTER ///// -->

<?php get_container_close(); ?>
	</body>
</html>