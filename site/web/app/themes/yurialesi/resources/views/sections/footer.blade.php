<footer class="content-info bg-yuriblue mt-7 py-4 px-10">
  <div class="text-center text-white fill-white">
    @include('partials/snippets.whatsapp')
  </div>
  <div class="text-center text-white fill-white my-2">    
    @include('partials/snippets.socialicons')
    <div class="text-center text-white fill-white mt-2">
      Yuri Alesi © Todos os direitos reservados. {{ date('Y') }}
    </div>
  </div>

  @php(dynamic_sidebar('sidebar-footer'))
  {{-- @include('partials/home.section2') --}}
</footer>