<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-2 rounded-lg bg-yellow-100">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 items-center hidden md:inline">
                    <p class="ml-3 text-yellow-600 cookie-consent__message">
                        {{ trans('cookie-consent::texts.msg') }}
                        <a href="#" data-toggle="modal" data-target="#cookiePrivacity" class="nav-link" style="color: red">
                        {{ trans('cookie-consent::texts.privacy') }}
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="cookiePrivacity" tabindex="-1" role="dialog" aria-labelledby="cookiePrivacityTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document" >
                            <div class="modal-content">
                                <div class="d-flex justify-content-between">
                                <h3 class="mt-2 ml-auto mr-auto" style="color: black">Assolit S.L.</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right: 5px">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-header justify-content-center">
                                    <a class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300" style="background-color: #8a0000;" class="close" data-dismiss="modal" aria-label="Close">
                                        {{ trans('cookie-consent::texts.agr') }}
                                    </a>
                                    <a style="margin-left: 20px" class="js-cookie-consent-deny cookie-buttons cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300" class="close" data-dismiss="modal" aria-label="Close">
                                        {{ trans('cookie-consent::texts.deny') }}
                                    </a>
                                </div>
                                <div class="modal-body text-left" style="color: black">
                                    {!! trans('cookie-consent::texts.msg_privacy') !!}
                                </div>
                            </div>
                            </div>
                        </div>
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <a class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.agr') }}
                    </a>
                    <a style="margin-left: 20px" class="js-cookie-consent-deny cookie-buttons cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.deny') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

