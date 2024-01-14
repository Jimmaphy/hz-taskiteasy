<div id="description-body">
    {!! $project->description !!}
</div>

<script>
    const descriptionParagraph = document.querySelectorAll('#description-body p');
    descriptionParagraph.forEach((paragraph) => {
        paragraph.className = "text-gray-500 dark:text-gray-400 text-sm leading-relaxed mt-2";
    })
</script>
