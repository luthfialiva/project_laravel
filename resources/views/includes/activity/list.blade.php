@foreach($feeds as $feed)
 <tr>
      @include("includes.activity.types.{$feed->name}")    
</tr>
@endforeach 