<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{url('/dashboard_admin')}}" class="header-logo">
            <img src="{{asset('image_propolis/1669617335-75x75.png')}}" class="img-fluid rounded-normal light-logo" alt="logo"><h5 class="logo-title light-logo ml-3">Metapropolis</h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="">
                    <a href="{{url('/dashboard_admin')}}" class="svg-icon">                        
                        <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                        <span class="ml-4">Master Landing</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            {{-- <li class="">
                                    <a href="{{route('landing_banner.index')}}">
                                        <i class="las la-minus"></i><span>Banner</span>
                                    </a>
                            </li> --}}
                            <li class="">
                                    <a href="{{route('pengertian_metapropolis.index')}}">
                                        <i class="las la-minus"></i><span>Pengertian Metapropolis</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('tentang_kami_admin.index')}}">
                                        <i class="las la-minus"></i><span>Tentang Kami</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('manfaat_admin.index')}}">
                                        <i class="las la-minus"></i><span>Manfaat</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('perlu_anda_tahu.index')}}">
                                        <i class="las la-minus"></i><span>Perlu Anda Tahu</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('jurnal_admin.index')}}">
                                        <i class="las la-minus"></i><span>Jurnal</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('testimoni_admin.index')}}">
                                        <i class="las la-minus"></i><span>Testimoni/Program</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('faq_admin.index')}}">
                                        <i class="las la-minus"></i><span>FAQ</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('blog.index')}}">
                                        <i class="las la-minus"></i><span>Berita/Blog</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('ranch_market.index')}}">
                                        <i class="las la-minus"></i><span>Ranch Market</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('tutorials.index')}}">
                                        <i class="las la-minus"></i><span>Tutorial</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route('events.index')}}">
                                        <i class="las la-minus"></i><span>Event</span>
                                    </a>
                            </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div> 
