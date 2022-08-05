<section id="section1" class="flex flex-col lg:flex-row lg:mt-40 justify-between items-start bg-white">
  <!--Left Col-->
  <div class="flex flex-col w-full lg:w-2/5 justify-center text-center lg:text-left animated animatedFadeInUp fadeInUp">
    <h1 class="mb-4 uppercase text-7xl lg:text-9xl font-bold text-yurigreen">Yuri Alesi</h1>
    <img class="block lg:hidden rounded-lg" width="834" height="834" alt="Imagem Yuri Alesi principal na home" src="@asset('images/perfil.jpg')" />
    <article class="mt-8 mb-8 prose lg:prose-2xl  prose-a:text-blue-800 prose-a:no-underline hover:prose-a:text-blue-500 hover:prose-a:underline">
      <p class="leading-normal text-xl mb-8">
        Candidato a Deputado Federal pelo <a class="underline" target="_blank" href="https://ptb.org.br">PTB
          Amapá</a> e Vereador da terra mais linda e setentrional do Brasil, Oiapoque ❤️
        Advogado de carreira e servo do Deus Vivo!</p>
      <p class="leading-normal text-xl mb-8">
        Jovem político apaixonado pelas grandes transformações sociais. Estratégico, disciplinado, resiliente e focado.
        Apaixonado por novos desafios, direito, política e negócios. Advogado e Vereador de Oiapoque.
      </p>
      @include('partials/snippets.socialicons')
      @include('partials/snippets.fblikeshare')
      <div class="fbsnippet mt-8">
        @include('partials/snippets.facebook')
      </div>
    </article>
  </div>
    <!--Right Col desktop -->
  <div class="social hidden lg:block w-full pl-48">
    <img class="z-50 hidden lg:block rounded-lg" width="834" height="834" alt="Imagem Yuri Alesi principal na home" src="@asset('images/perfil.jpg')" />
    {{-- <h2>Entre em contato</h2>
    @php(dynamic_sidebar('textos-primary')) --}}
  </div>
  <!--Right Col mobile -->
</section>