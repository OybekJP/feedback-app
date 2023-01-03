<?php include 'inc/header.php'; ?>          

<?php 
$feedback = [
  [
    'id'=> '1',
    'name'=>'Karim Benzema',
    'email'=>'karim@b.b',
    'body'=>'Hala Madrid'
  ],
  [
    'id'=> '2',
    'name'=>'Ronaldo',
    'email'=>'cr@cr.7',
    'body'=>'Feedbakc app, Siiii!'
  ],
];



?>
   
    <h2>Past Feedback</h2>
<!-- checks if $feedback variable is empty. If true message will be printed instead -->
  <?php if(empty($feedback)): ?>
    <p class="lead mt3">There is no feedback</p>
  <?php endif; ?>
  
  <?php foreach($feedback as $item): ?>

    <div class="card my-3 w-75">
     <div class="card-body text-center">
      <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?> 
       </div>
     </div>
   </div>
  <?php endforeach; ?>

<?php include 'inc/footer.php' ?>