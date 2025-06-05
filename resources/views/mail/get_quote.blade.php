<x-mail::message>
    # 📬 New Quote Submission

    ---
    **👤 Sender Name:**
    {{ $data->name }}

    **📧 Email:**
    {{ $data->email }}

    @if(!empty($data->company))
**🏢 Company:**
    {{ $data->company }}
    @endif

    @if(!empty($data->country))
    **🌍 Country:**
    {{ $data->country }}
    @endif

    **💬 Message:**
    {{ $data->message }}

    ---

    **{{ config('app.name') }}**
</x-mail::message>
