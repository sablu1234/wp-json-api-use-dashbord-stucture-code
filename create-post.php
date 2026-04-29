<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>

<body>

    <div class="container create-post-container">
        
    <a href="BACK_URL" class="back-btn">Back</a>

        <h2>Create Post</h2>
        
        <form method="post" action="SUBMIT_URL" enctype="multipart/form-data">

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>

            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="">-- Select Category --</option>
            </select>

            <label for="featured-image">Featured Image:</label>
            <input type="file" id="featured_image" name="featured_image">

            <label for="slug">Slug:</label>
            <input type="text" id="slug" name="slug" readonly value="auto-generated-slug">

            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="">-- Select Status --</option>
                <option value="publish">Publish</option>
                <option value="draft">Draft</option>
                <option value="future">Future</option>
                <option value="trash">Trash</option>
                <option value="private">Private</option>
            </select>

            <button type="submit">Create Post</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        (function($) {
            $.fn.convertToSlug = function() {
                var str = $(this).val();
                var slug = str
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                return slug;
            };
        })(jQuery);

        $(function(){
            $('#title').on('keyup', function() {
                var slug = $(this).convertToSlug();
                $("#slug").val(slug);
            });
        });
    </script>

</body>

</html>
