    <td><img src="{{$feed->user->picture}}" class="img-circle" style="height:40px"/></td>
      <td>{{$feed->user->name}}</td>
      <td>Delete <a onclick="return confirm('Data ini telah dihapus!!!')"> "{{$feed->subject_name}}" </a> Document</td>
      <td>at {{$feed->created_at->format('D M Y')}}</td>
    <td><span class="label label-danger">{{$feed->created_at->diffForHumans()}}</span></td>