


<div class="form-group" style="align-center">
    <label for="{{$name}}">{{$label}}</label>
    <input style="height:40px; width: 500px;align:center" type="{{$type}}" name="{{$name}}" id="" class="form-control"
     placeholder="" value="{{old($name)}}"/>
    <span class="text-danger">
        <!-- @error($name){{$message}}@enderror -->
    </span> 
</div>