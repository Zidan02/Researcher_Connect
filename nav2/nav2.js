function changeContent(type) {
    var contentDiv = document.getElementById('content');
    switch (type) {
      case 'post':
        contentDiv.innerHTML = "<h2>Post Content</h2><p>This is the content for posts.</p>";
        break;
      case 'paper':
        contentDiv.innerHTML = "<h2>Paper Content</h2><p>This is the content for papers.</p>";
        break;
      case 'question':
        contentDiv.innerHTML = "<h2>Question Content</h2><p>This is the content for questions.</p>";
        break;
      case 'job post':
        contentDiv.innerHTML = "<h2>Job post</p>";
        break;
      case 'requisition post':
        contentDiv.innerHTML = "<h2>Job requisition post</p>";
        break;
      default:
        break;
    }
  }