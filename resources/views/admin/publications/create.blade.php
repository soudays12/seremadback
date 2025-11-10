@extends('admin.layout')
@section('content')

    
  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
  @endif
   @if(session('error'))
  <div class="mb-4 p-3 bg-green-100 text-blue-800 rounded">
    <p class=""> {{ session('error') }} </p>
  </div>
  @endif

  <br>
<!-- wrapper centré -->
<div class="flex justify-center items-start md:items-center min-h-[60vh]">
  <div class="bg-white w-[650px] rounded shadow-lg relative">
    <!-- Contenu -->
    <div class=" p-4" style="we">
      <form id="candidateForm" action="{{ route('admin.publications.store') }}" method="post" enctype="multipart/form-data" class="space-y-6" novalidate>
          @csrf

          <!-- Section image -->
          <label for="file" class="flex flex-col items-center border-2 border-dashed border-gray-300 rounded-xl p-6 bg-gray-50 hover:bg-gray-100 transition">
              <input type="file" id="file" name="image" accept="image/*" hidden>
              <div class="img-area text-center cursor-pointer" id="imgPreviewArea" data-img="">
                  <i class='bx bxs-cloud-upload text-4xl text-indigo-500'></i>
                  <h3 class="text-gray-700 font-semibold mt-2">Choisissez une image de la publication</h3>
                  <p class="text-sm text-gray-500">Pas plus grand que <span class="font-semibold text-indigo-600">2MB</span></p>
              </div>
              <button type="button" id="selectImage" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700 transition">
                  Choisir une image
              </button>
          </label>

          <script>
              const selectImage = document.getElementById('selectImage');
              const inputFile = document.getElementById('file');
              const imgArea = document.querySelector('.img-area');

              selectImage.addEventListener('click', () => inputFile.click());

              inputFile.addEventListener('change', () => {
                  const image = inputFile.files[0];
                  if (image && image.size < 2000000) {
                      const reader = new FileReader();
                      reader.onload = () => {
                          imgArea.innerHTML = ''; // Vide la zone
                          const img = document.createElement('img');
                          img.src = reader.result;
                          img.classList.add('w-32', 'h-32', 'object-cover', 'rounded-md', 'mx-auto');
                          imgArea.appendChild(img);
                      };
                      reader.readAsDataURL(image);
                  } else {
                      alert("L'image dépasse 2 Mo ou n'est pas valide !");
                  }
              });
          </script>


          <!-- Nom -->
          <label class="block">
              <span class="text-sm font-medium text-gray-700">Titre de la publication</span>
              <input 
                  type="text" 
                  name="titre" 
                  required 
                  placeholder="Titre de la publication"
                  class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400"
              />
          </label>
          

          <!-- Description -->
          <label class="block">
              <span class="text-sm font-medium text-gray-700">Contenu</span>
              <textarea 
                  name="contenu" 
                  rows="4"
                  required
                  placeholder="Decrivez votre ppublication"
                  class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 resize-none"
              ></textarea>
          </label>


          <!-- Bouton de soumission -->
          <button type="submit"
              class="w-full inline-flex justify-center items-center gap-2 px-4 py-2 rounded-md bg-indigo-600 text-white font-medium shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">
              <i class='bx bx-plus-circle text-lg'></i>
              Enregistrer la publication
          </button>
      </form>

    </div>
  </div>
</div>

@endsection()