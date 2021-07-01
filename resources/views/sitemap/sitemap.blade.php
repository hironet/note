@php
  echo '<?xml version="1.0" encoding="UTF-8"?>', PHP_EOL;
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>{{ url('/') }}</loc>
    <lastmod>{{ date('Y-m-01') }}</lastmod>
  </url>
@foreach (config('article.ARTICLE_TITLES') as $_category_id => $_category_info)
  @foreach ($_category_info as $_subcategory_id => $_subcategory_info)
    @foreach ($_subcategory_info as $_article_id => $_article_info)
  <url>
    <loc>{{ url($_article_info[0]) }}</loc>
    <lastmod>{{ $_article_info[3] }}</lastmod>
  </url>
    @endforeach
  @endforeach
@endforeach
</urlset>
