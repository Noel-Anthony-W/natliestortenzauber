<x-layout>
    <div class="contact-container">
        <div class="contact-form">
            <div>
                <h3>Kontaktformular</h3>
                @if ($errors->any())
                    <div class="alert ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="input-group-row">
                        <x-form-field :field="'firstName'" :fieldName="'Vorname'" :required="true" :type="'text'" />

                        <x-form-field :field="'lastName'" :fieldName="'Nachname'" :required="true" :type="'text'" />
                    </div>
                    <x-form-field :field="'email'" :fieldName="'Email'" :required="true" :type="'email'" />
                    <x-selection-box :field="'emailSubject'" :fieldName="'Betreff'" :required="true" :options="\App\Http\Controllers\ContactController::$possibleSubjects" />
                    <x-form-field :field="'message'" :fieldName="'Nachricht'" :required="true" :type="'textarea'"
                        :rows="'6'" />

                    <button class="btn-primary" type="submit">Absenden</button>
                </form>
            </div>
        </div>
        <div class="contact-sidebar">
            <h1 class="h1-font-size">Kontakt</h1>
            <h2 class="h5-font-size">Ich beantworte dir gerne sämtliche Fragen zu meinen Kuchen oder sonstigen Themen über meine Arbeit</h2>
        </div>

    </div>
</x-layout>
