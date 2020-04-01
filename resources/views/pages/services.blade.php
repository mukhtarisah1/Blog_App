@extends('layouts.app')
@section('content')
    <div class="wow fadeIn">
      <h2 class="text-center h1 my-4">Our best projects</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text text-center">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="row wow fadeInLeft">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><img class="img-fluid rounded z-depth-2" src="img/hologram.jpg" alt="project image"/></div>
      <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
        <div class="row mb-3">
          <div class="col-1 mr-1">
              <svg class="bi bi-book-half" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 018.5 2.5v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 010 13.5v-11a.5.5 0 01.276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 01.22-.103 12.958 12.958 0 012.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 001 2.82z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 007.5 2.5v11a.5.5 0 00.854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0016 13.5v-11a.5.5 0 00-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z" clip-rule="evenodd"/>
          </svg></div>
          <div class="col-10">
            <h5 class="font-bold">Education</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-1 mr-1">
              <svg class="bi bi-gear-wide-connected" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M9.928 1.723c-.243-.97-1.62-.97-1.863 0l-.072.286a.96.96 0 01-1.622.435l-.204-.212c-.695-.718-1.889-.03-1.614.932l.08.283a.96.96 0 01-1.186 1.187l-.283-.081c-.961-.275-1.65.919-.932 1.614l.212.204a.96.96 0 01-.435 1.622l-.286.072c-.97.242-.97 1.62 0 1.863l.286.071a.96.96 0 01.435 1.622l-.212.205c-.718.695-.03 1.888.932 1.613l.283-.08a.96.96 0 011.187 1.187l-.081.283c-.275.96.919 1.65 1.614.931l.204-.211a.96.96 0 011.622.434l.072.286c.242.97 1.62.97 1.863 0l.071-.286a.96.96 0 011.622-.434l.205.212c.695.718 1.888.029 1.613-.932l-.08-.283a.96.96 0 011.187-1.188l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205A.96.96 0 0115.983 10l.286-.071c.97-.243.97-1.62 0-1.863l-.286-.072a.96.96 0 01-.434-1.622l.212-.204c.718-.695.029-1.889-.932-1.614l-.283.08a.96.96 0 01-1.188-1.186l.081-.283c.275-.961-.918-1.65-1.613-.932l-.205.212A.96.96 0 0110 2.009l-.071-.286zm-.932 12.27a4.998 4.998 0 100-9.994 4.998 4.998 0 000 9.995z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M8.372 8.996L5.598 5.298l.8-.6 2.848 3.798h4.748v1H9.246l-2.849 3.798-.8-.6 2.775-3.698z" clip-rule="evenodd"/>
          </svg></div>
          <div class="col-10">
            <h5 class="font-bold">Technology</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-1 mr-1">
              <svg class="bi bi-files" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 2h8a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V4a1 1 0 00-1-1H3z" clip-rule="evenodd"/>
            <path d="M5 0h8a2 2 0 012 2v10a2 2 0 01-2 2v-1a1 1 0 001-1V2a1 1 0 00-1-1H5a1 1 0 00-1 1H3a2 2 0 012-2z"/>
          </svg></div>
          <div class="col-10">
            <h5 class="font-bold">Finance</h5>
            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda
              voluptate velit.
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection