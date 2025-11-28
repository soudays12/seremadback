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


    <main class="flex justify-center items-center">
        <div class="w-7xl w- w-7xl border border-blue-700">
            
    
    
    
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Publications</h1>
                <div>
                    <a href="{{ route('admin.index')}}">
                        <button class="bg-green-500 px-3 py-2 text-white rounded-md">Retour</button>
                    </a>
                </div>
            </div>
        
            <!-- wrapper centré -->
            <div class="flex justify-center items-start md:items-center min-h-[60vh]">
                <div class="bg-white  rounded shadow-lg relative">
                    <!-- Contenu -->
                    <div class="rounded-2xl p-7" style="we">
                        <form id="candidateForm" action="{{ route('admin.publications.store') }}" method="post" enctype="multipart/form-data" class="space-y-6" novalidate>
                            @csrf
        
                            <!-- Section images multiples -->
                            <label for="files" class="flex flex-col items-center border-2 border-dashed border-gray-300 rounded-xl p-6 bg-gray-50 hover:bg-gray-100 transition">
                                <input type="file" id="files" name="images[]" accept="image/*" multiple hidden>
                                <div class="img-area text-center cursor-pointer" id="imgPreviewArea">
                                    <i class='bx bxs-cloud-upload text-4xl text-indigo-500'></i>
                                    <h3 class="text-gray-700 font-semibold mt-2">Choisissez les images de la publication</h3>
                                    <p class="text-sm text-gray-500">Plusieurs images possibles - Max <span class="font-semibold text-indigo-600">2MB</span> chacune</p>
                                </div>
                                <button type="button" id="selectImages" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700 transition">
                                    <i class='bx bx-images mr-2'></i>Choisir des images
                                </button>
                            </label>
                            <div id="imagePreview" class="grid grid-cols-3 gap-4 mt-4 hidden"></div>
        
                            <script>
                                const selectImages = document.getElementById('selectImages');
                                const inputFiles = document.getElementById('files');
                                const imgArea = document.querySelector('.img-area');
                                const imagePreview = document.getElementById('imagePreview');
        
                                selectImages.addEventListener('click', () => inputFiles.click());
        
                                inputFiles.addEventListener('change', () => {
                                    const files = Array.from(inputFiles.files);
                                    imagePreview.innerHTML = '';
                                    
                                    if (files.length > 0) {
                                        imgArea.innerHTML = `<i class='bx bx-check text-4xl text-green-500'></i><h3 class="text-green-700 font-semibold mt-2">${files.length} image(s) sélectionnée(s)</h3>`;
                                        imagePreview.classList.remove('hidden');
                                        
                                        files.forEach((file, index) => {
                                            if (file.size < 2000000) {
                                                const reader = new FileReader();
                                                reader.onload = () => {
                                                    const div = document.createElement('div');
                                                    div.className = 'relative';
                                                    div.innerHTML = `
                                                        <img src="${reader.result}" class="w-full h-24 object-cover rounded-md">
                                                        <span class="absolute top-1 right-1 bg-blue-500 text-white text-xs px-2 py-1 rounded">${index + 1}</span>
                                                    `;
                                                    imagePreview.appendChild(div);
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        });
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
    
    
    
        </div>

    </main>

@endsection()