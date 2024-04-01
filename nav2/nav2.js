function changeContent(type) {
    var contentDiv = document.getElementById('content');
    switch (type) {
      
      case 'post':

        fetch('/SAD-SIUM/post.html')
        .then(response => response.text())
        .then(data => contentDiv.innerHTML = data)
        .catch(error => console.error('Failed to load HTML content:', error));
        
        break;
      
        
        case 'paper':
          fetch('/SAD-SIUM/paper.html')
          .then(response => response.text())
          .then(data => contentDiv.innerHTML = data)
          .catch(error => console.error('Failed to load HTML content:', error));
        break;
      
        
        case 'question':
          fetch('/SAD-SIUM/question.html')
          .then(response => response.text())
          .then(data => contentDiv.innerHTML = data)
          .catch(error => console.error('Failed to load HTML content:', error));
        break;
      
        
        case 'job post':
          fetch('/SAD-SIUM/job.html')
          .then(response => response.text())
          .then(data => contentDiv.innerHTML = data)
          .catch(error => console.error('Failed to load HTML content:', error));
        break;
      
        
        case 'requisition post':
          fetch('/SAD-SIUM/requisitionpost.html')
          .then(response => response.text())
          .then(data => contentDiv.innerHTML = data)
          .catch(error => console.error('Failed to load HTML content:', error));
        
        break;
      default:
        break;
    }
  }