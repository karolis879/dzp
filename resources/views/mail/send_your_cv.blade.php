<x-mail::message>
    # 📬 New CV Submission Received

    ---

    **👤 Full Name:**
    {{ $data->name }}

    **📧 Email:**
    {{ $data->email }}

    **🏢 Profession Name:**
    {{ $data->profession }}

    **🌍 Country:**
    {{ $data->country }}

    **💬 Motivation:**
  {{ $data->message }}

    @if($data->attachment)
        **📎 CV Attachment:**
        A CV file has been attached with this message.
    @endif

    ---

    **{{ config('app.name') }}**
</x-mail::message>
