<html>
  <head>
    <!-- Load TensorFlow.js -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <!-- Load MobileNet -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet"></script>
    <!-- Load KNN Classifier -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/knn-classifier"></script>
 </head>

  <body>
    <img id='class0' src='images/C0801.jpg '/>
    <img id='class1' src='images/C0802.jpg '/>
    <img id='test' src='images/C0803.jpg '/>
  </body>
  <!-- Place your code in the script tag below. You can also use an external .js file -->
  <script>

    const init = async function() {
      // Create the classifier.
      const classifier = knnClassifier.create();

      // Load mobilenet.
      const mobilenetModule = await mobilenet.load();

      // Add MobileNet activations to the model repeatedly for all classes.
      const img0 = tf.browser.fromPixels(document.getElementById('class0'));
      const logits0 = mobilenetModule.infer(img0, 'conv_preds');
      classifier.addExample(logits0, 0);

      const img1 = tf.browser.fromPixels(document.getElementById('class1'));
      const logits1 = mobilenetModule.infer(img1, 'conv_preds');
      classifier.addExample(logits1, 1);

      // Make a prediction.
      const x = tf.browser.fromPixels(document.getElementById('test'));
      const xlogits = mobilenetModule.infer(x, 'conv_preds');
      console.log('Predictions:');
      const result = await classifier.predictClass(xlogits);
      console.log(result);
    }

    init();

  </script>
</html>