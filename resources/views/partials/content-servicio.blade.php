<article @php post_class() @endphp>
  <header>
  	<a href="{{ get_permalink() }}">{{ the_post_thumbnail('cropped-extra-thumb', ['class' => 'img-fluid'] ) }}</a>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
</article>
