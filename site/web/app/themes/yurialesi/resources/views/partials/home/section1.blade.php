<picture>
  <source 
    srcset="@asset('images/coverperfil.jpg')"
    media="(min-width: 600px)"
  />
  <img 
    src="@asset('images/mobile_coverperfil.jpg')"
    alt="Imagem Yuri Alesi número 1415 principal na home"
  />
</picture>
<section id="section1" class="container lg:mt-28 justify-between items-start bg-white px-4 mt-4 lg:mt-8 ">
  <!--Left Col-->
  <h1 class="mb-4 text-center tracking-normal text-2xl lg:text-3xl text-yurigreen">Yuri Alesi Nº 1415, candidato a Deputado Federal</h1>
  <h2 class="text-center text-1xl lg:text-3xl text-yurigreen">Oiapoque, chegou nossa vez!</h2>
  <div class="flex flex-col lg:flex-row w-full justify-between">
    <article class="mt-8 mb-8 prose lg:prose-2xl prose-a:text-blue-800 prose-a:no-underline hover:prose-a:text-blue-500 hover:prose-a:underline">
      <p>
        Candidato a Deputado Federal, número 1415 pelo <a class="underline" target="_blank" href="https://ptb.org.br">PTB
          Amapá</a> e Vereador da terra mais linda e setentrional do Brasil, Oiapoque - AP ❤️
        Advogado de carreira e servo do Deus Vivo!</p>
      <p>
        Jovem político apaixonado pelas grandes transformações sociais. Estratégico, disciplinado, resiliente e focado.
        Apaixonado por novos desafios, direito, política e negócios. Advogado e Vereador de Oiapoque.
      </p>
      <p>
        Pela primeira vez em 77 anos, Oiapoque tem um representante para Deputado Federal, sendo o primeiro jovem oiapoquense da história a vir numa candidatura: Dr. Yuri Alesi, número 1415.
      </p>
      <blockquote><p>Eu decidi mudar o Amapá a partir de Oiapoque.</p><cite>Yuri Alesi</cite></blockquote>
      <p>
        Dr. Yuri Alesi é o primeiro candidato a deputado federal do Amapá que é filho de Oiapoque e está disposto a lutar para
        mudar nossa realidade. Oiapoque merece o melhor, chegou a nossa vez de fazer os nossos próprios representantes. Somos
        mais de 21 mil eleitores, número mais do que suficiente para eleger um
        deputado federal e dois deputados estaduais. Oiapoque, chegou a nossa vez!!!
      </p>
      <blockquote><p>Abre a tua boca a favor do mudo, pela causa de todos que são designados à destruição.
        Abre a tua boca; julga retamente; e faze justiça aos pobres e aos necessitados.</p><cite>Provérbios 31:8</cite>
      </blockquote>
      <picture class="px-5">
        <img alt="Imagem Yuri número 1415 Alesi home" src="@asset('images/perfil.jpg')" />
      </picture>
    </article>
    <section class="">
      @include('partials/snippets.socialicons')
      @include('partials/snippets.fblikeshare')
      <div class="fbsnippet mt-8">
        @include('partials/snippets.facebook')
      </div>
    </section>
  </div>
</section>