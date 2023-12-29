<div id="post-body">
    {!! $post->body !!}
</div>

<script>
    const bodyParagraphs = document.querySelectorAll('#post-body p');
    bodyParagraphs.forEach((paragraph) => {
        paragraph.className = "text-gray-500 dark:text-gray-400 text-sm leading-relaxed mt-2";
    })
</script>
