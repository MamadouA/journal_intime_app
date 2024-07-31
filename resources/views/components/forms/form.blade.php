<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
<form {{$attributes->merge(["class" => "md:w-6/12 w-4/5 py-12 bg-slate-300 shadow-md
     border border-slate-400 rounded-md text-center"])}} action={{$action}} method="POST">
    @csrf
    {{$slot}}
</form>