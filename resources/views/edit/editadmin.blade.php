<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<!-- Portfolio Section -->
<section class="page-section portfolio bg-primary" id="portfolio">
   <div class="container">

     <!-- Portfolio Section Heading -->
     <h2 class="page-section-heading text-center text-uppercase text-white bg-info pt-5 mb-0">Editer Admin</h2>

     <!-- Icon Divider -->
     <div class="divider-custom">
       <div class="divider-custom-line"></div>
       <div class="divider-custom-icon">
         <i class="fas fa-star"></i>
       </div>
       <div class="divider-custom-line"></div>
     </div>
<div>
   <form class="d-flex flex-column  align-items-start mx-auto w-50" action="{{route('update',$admin->id)}}" method="POST" enctype="multipart/form-data">
       @csrf
       <label for="">nom</label>
       <input class="w-50" type="text" name="nom" value="{{$admin->pseudo}}">
       <label for="">Email</label>
       <input class="w-50" type="text" name="email" value="{{$admin->email}}">
       <label for="">âge</label>
       <input class="w-50" type="number" name="age" value="{{$admin->age}}">
       <label for="">photo</label>
       <input class="w-50" type="file" name="img" value="{{$admin->img}}">
       <label for="">Mot de passe</label>
       <input class="w-50" type="text" name="motdepasse" value="{{$admin->motdepasse}}">
       <input class="w-50" type="submit" value='enregistrer'>
   </form>
</div>
</div>
</section>