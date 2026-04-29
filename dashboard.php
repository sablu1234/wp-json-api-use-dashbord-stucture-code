<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Posts</title>

    <style>
    a.edit-btn {
        padding: 0.75rem;
        margin-top: 1rem;
        background: linear-gradient(135deg, #aed581 0%, #263676 100%);
        border: none;
        border-radius: 4px;
        color: #ffffff;
        text-decoration: none;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease;
        display: inline-block;
    }
    </style>
</head>

<body>

    <div class="container list-post-container">
        
        <a href="CREATE_POST_PAGE_URL" class="create-post-btn">Create Post</a>

        <h2>List of Posts</h2>
        <!-- Success message for successful login -->
        <div class="success-alert">Success Message</div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Featured Image</th>
                    <th>Post Status</th>
                    <th>Post Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sample Title</td>
                    <td>Sample Content</td>
                    <td>
                        <img src="IMAGE_URL" alt="Featured Image" width="50">
                    </td>
                    <td>Publish</td>
                    <td>sample-title</td>
                    <td class="action-buttons">
                        <a href="EDIT_URL" class="edit-btn">Edit</a>
                        <button class="delete-btn btn-post-delete" data-id="POST_ID">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(function() {
        // Your Delete Button Code
    });
    </script>
</body>

</html>
