<!-- Footer
    ============================================= -->
<footer id="footer" class="bg-contrast-100" style="border-top: 2px solid rgba(var(--cnvs-contrast-rgb),0.06);">
    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="bg-transparent">
        <div class="container">

            <div class="row col-mb-30">
                <div class="col-md-6 text-center text-md-start">
                    Copyrights &copy; {{ \Carbon\Carbon::now()->format('Y') }} Todos los derechos reservados.<br>
                    <div class="copyright-links"><a href="{{ route('home.legal.warning') }}">Aviso legal</a> / <a href="{{ route('home.privacy.policy') }}">Política de privacidad</a> / <a href="{{ route('home.cookie.policy') }}">Política de cookies</a></div>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="copyrights-menu copyright-links">
                        <a href="#">Home</a>/<a href="#">Resultados</a>/<a href="#">Contact</a>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- #copyrights end -->
</footer><!-- #footer end -->
