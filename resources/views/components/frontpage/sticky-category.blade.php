<div class="widget rounded">
   <div class="widget-header text-center">
       <h3 class="widget-title">Kategori</h3>
       <img src="images/wave.svg" class="wave" alt="wave" />
   </div>
   <div class="widget-content">
       <ul class="list">
           @foreach ($categories as $category)
               <li><a href="#">{{ $category->name }}</a><span>(5)</span></li>
           @endforeach
       </ul>
   </div>
</div>