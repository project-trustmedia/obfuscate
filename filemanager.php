<?php

session_start();

// Define the root directory for the file manager
define('FM_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); // Set to document root
define('PASSWORD', 'password'); // Set a password for authentication

// Handle login/logout (basic session-based authentication)
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['login'])) {
    if ($_POST['password'] === PASSWORD) {
        $_SESSION['authenticated'] = true;
    } else {
        echo "<script>alert('Invalid Password');</script>";
    }
}

if (!isset($_SESSION['authenticated'])) {
    echo '<form method="POST">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
          </form>';
    exit();
}

// Get the current path or default to the document root
$path = isset($_GET['path']) ? $_GET['path'] : FM_ROOT_PATH;
$path = realpath($path);

if (strpos($path, FM_ROOT_PATH) !== 0) {
    die('Access denied');
}

// Handle file upload
if (isset($_FILES['file'])) {
    $uploadFile = $path . DIRECTORY_SEPARATOR . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
    header('Location: ' . $_SERVER['PHP_SELF'] . '?path=' . urlencode($path));
    exit();
}

// Handle file creation
if (isset($_POST['new_file'])) {
    $newFile = $path . DIRECTORY_SEPARATOR . $_POST['file_name'];
    file_put_contents($newFile, '');
    header('Location: ' . $_SERVER['PHP_SELF'] . '?path=' . urlencode($path));
    exit();
}

// Handle directory creation
if (isset($_POST['new_dir'])) {
    $newDir = $path . DIRECTORY_SEPARATOR . $_POST['dir_name'];
    mkdir($newDir);
    header('Location: ' . $_SERVER['PHP_SELF'] . '?path=' . urlencode($path));
    exit();
}

// Handle file deletion
if (isset($_GET['delete'])) {
    $deletePath = realpath($path . DIRECTORY_SEPARATOR . $_GET['delete']);
    if (strpos($deletePath, FM_ROOT_PATH) === 0 && is_file($deletePath)) {
        unlink($deletePath);
    }
    header('Location: ' . $_SERVER['PHP_SELF'] . '?path=' . urlencode($path));
    exit();
}

// Handle directory deletion
if (isset($_GET['delete_dir'])) {
    $deleteDirPath = realpath($path . DIRECTORY_SEPARATOR . $_GET['delete_dir']);
    if (strpos($deleteDirPath, FM_ROOT_PATH) === 0 && is_dir($deleteDirPath)) {
        rmdir($deleteDirPath);
    }
    header('Location: ' . $_SERVER['PHP_SELF'] . '?path=' . urlencode($path));
    exit();
}

// Handle file editing
if (isset($_POST['edit_file'])) {
    $editFilePath = realpath($path . DIRECTORY_SEPARATOR . $_POST['edit_file']);
    if (strpos($editFilePath, FM_ROOT_PATH) === 0 && is_file($editFilePath)) {
        file_put_contents($editFilePath, $_POST['file_content']);
    }
    header('Location: ' . $_SERVER['PHP_SELF'] . '?path=' . urlencode($path));
    exit();
}

$items = scandir($path);

// Display the interface
echo '<h2>File Manager</h2>';
echo '<a href="?logout=1">Logout</a>';

// Breadcrumb navigation
$breadcrumbs = explode(DIRECTORY_SEPARATOR, str_replace(FM_ROOT_PATH, '', $path));
echo '<h3>Current Path: ';
echo '<a href="?path=' . urlencode(FM_ROOT_PATH) . '">Root</a>'; // Link to document root
$breadcrumbPath = FM_ROOT_PATH;
foreach ($breadcrumbs as $crumb) {
    if ($crumb == '') continue;
    $breadcrumbPath .= DIRECTORY_SEPARATOR . $crumb;
    echo ' / <a href="?path=' . urlencode($breadcrumbPath) . '">' . htmlspecialchars($crumb) . '</a>';
}
echo '</h3>';

// Display files and directories
echo '<ul>';
foreach ($items as $item) {
    if ($item == '.') continue;
    $itemPath = $path . DIRECTORY_SEPARATOR . $item;
    if (is_dir($itemPath)) {
        echo '<li><a href="?path=' . urlencode($itemPath) . '">' . htmlspecialchars($item) . '</a> [<a href="?path=' . urlencode($path) . '&delete_dir=' . urlencode($item) . '">Delete</a>]</li>';
    } else {
        echo '<li>' . htmlspecialchars($item) . ' [<a href="?path=' . urlencode($path) . '&delete=' . urlencode($item) . '">Delete</a>] [<a href="?path=' . urlencode($path) . '&edit=' . urlencode($item) . '">Edit</a>]</li>';
    }
}
echo '</ul>';

// File upload form
echo '<form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Upload File</button>
      </form>';

// File creation form
echo '<form method="POST">
        <input type="text" name="file_name" placeholder="New File Name">
        <button type="submit" name="new_file">Create File</button>
      </form>';

// Directory creation form
echo '<form method="POST">
        <input type="text" name="dir_name" placeholder="New Directory Name">
        <button type="submit" name="new_dir">Create Directory</button>
      </form>';

// File editing form
if (isset($_GET['edit'])) {
    $editFilePath = $path . DIRECTORY_SEPARATOR . $_GET['edit'];
    if (is_file($editFilePath)) {
        $fileContent = file_get_contents($editFilePath);
        echo '<h3>Edit File: ' . htmlspecialchars($_GET['edit']) . '</h3>';
        echo '<form method="POST">
                <textarea name="file_content" rows="20" cols="80">' . htmlspecialchars($fileContent) . '</textarea>
                <input type="hidden" name="edit_file" value="' . htmlspecialchars($_GET['edit']) . '">
                <button type="submit">Save</button>
              </form>';
    }
}

?>
