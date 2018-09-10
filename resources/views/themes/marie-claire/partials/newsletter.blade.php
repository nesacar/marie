<div class="newsletter double-border aside-box">
    <div class="newsletter-text">Prijavite se i otrkrijte novosti i promocije</div>
    <form method="POST" action="{{ route('newsletter.subscribe') }}">
        @csrf
        <div>
            <label class="sr-only" for="nl-email">Email: </label>
            <input class="text-input"
                   type="email"
                   name="email"
                   id="nl-email"
                   placeholder="Unesite e-mail adresu"
            />
        </div>
        <button class="btn btn--primary" type="submit">prijavi se</button>
    </form>
</div>
