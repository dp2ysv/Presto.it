<x-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapperNoBottom">
            <div class="col-12 text-center">
                <h1 class="display-4">{{ __('ui.ApproveOrRejectThisArticle') }}:</h1>
            </div>
        </div>

        @if ($articleToReview == null)
            <div class="d-flex justify-content-center align-items-center wrapper2">
                <div class="col-12 text-center">
                    <div>{{ __('ui.ThereAreNoArticlesToApprove') }}</div>
                </div>
            </div>
        @else
            <x-review-detail :article="$articleToReview">
                <!-- Bottoni accetta e rifiuta -->
                <div class="d-flex justify-content-center mb-3">
                    <span class="me-2">
                        <form method="POST" action="{{ route('article.approve', ['article' => $articleToReview]) }}"
                            class="my-2">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="acceptButton">{{ __('ui.Accept') }}</button>
                        </form>
                    </span>
                    <span class="ms-2">
                        <form method="POST" action="{{ route('article.reject', ['article' => $articleToReview]) }}"
                            class="my-2">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="rejectButton">{{ __('ui.Reject') }}</button>
                        </form>
                    </span>
                </div>
                </x-detail>
        @endif

            <div class="d-flex justify-content-center align-items-center wrapper">
                <div class="col-12 text-center">
                    <h1 class="display-4">{{ __('ui.LastOperationCarriedOut') }}</h1>
                </div>
            </div>
            @if (!$lastReviewed)
            <div class="d-flex justify-content-center align-items-center wrapper2">
                <div class="col-12 text-center">
                    <div>{{ __('ui.ThereAreNoApprovedOrRejectedArticles') }}</div>
                </div>
            </div>
            @else
                <x-detail :article="$lastReviewed">
                    @if ($lastReviewed->accepted == true)
                        <div class="mb-3">
                            <p>Status: Accettato</p>
                            <form method="POST" action="{{ route('article.reject', ['article' => $lastReviewed]) }}" class="my-2">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="submitBtn">{{ __('ui.CancelOperation') }}</button>
                            </form>
                        </div>
                    @endif
                    @if ($lastReviewed->accepted == false)
                        <div class="mb-3">
                            <p>Status: Rifiutato</p>
                            <form method="POST" action="{{ route('article.approve', ['article' => $lastReviewed]) }}" class="my-2">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="submitBtn">{{ __('ui.CancelOperation') }}</button>
                            </form>
                        </div>
                    @endif
                </x-detail>
            @endif
    </div>
    </div>
    </div>
</x-layout>