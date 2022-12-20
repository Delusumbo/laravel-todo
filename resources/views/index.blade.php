

@unless (count($list) == 0)

@foreach ($list as $lists)
<p>{{ $lists['todo'] }}</p>
@endforeach
@else
<p>No Listings found</p>
@endunless
<a href="./todo">Click here to add todo</a>