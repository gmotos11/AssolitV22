@if($cookieConsentConfig['enabled'] && ! $alreadyConsentedWithCookies)

    @include('cookie-consent::dialogContents')

    <script>
        window.laravelCookieConsent = (function () {
            const COOKIE_VALUE = 1;
            const COOKIE_VALUE_DENY = 0;
            const COOKIE_DOMAIN = '{{ config('session.domain') ?? request()->getHost() }}';
            
            function consentWithCookies() {
                setCookie('{{ $cookieConsentConfig['cookie_name'] }}', COOKIE_VALUE, {{ $cookieConsentConfig['cookie_lifetime'] }});
                hideCookieDialog();
            }
            function consentWithCookiesDeny() {
                setCookie('{{ $cookieConsentConfig['cookie_name'] }}', COOKIE_VALUE_DENY, {{ $cookieConsentConfig['cookie_lifetime'] }});
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/{{ config('session.secure') ? ';secure' : null }}'
                    + '{{ config('session.same_site') ? ';samesite='.config('session.same_site') : null }}';
            }

            if (cookieExists('{{ $cookieConsentConfig['cookie_name'] }}')) {
                hideCookieDialog();
            }

            //loop to check agree buttons
            const buttons = document.getElementsByClassName('js-cookie-consent-agree');
            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }
            //loop to check deny buttons
            let deny = document.getElementsByClassName("js-cookie-consent-deny");
            for (let i = 0; i < deny.length; ++i) {
                deny[i].addEventListener('click', () => {
                    consentWithCookiesDeny();
                    hideCookieDialog();
                });
            }
            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>

@endif
