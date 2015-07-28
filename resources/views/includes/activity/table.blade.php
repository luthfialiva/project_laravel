<?php $no=0; ?>
@foreach($feeds as $feed)
<?php $no=$no+1; ?>
 <tr>
      <td><?php echo $no ; ?></td>
      @include("includes.activity.types.{$feed->name}")    
</tr>
@endforeach      
