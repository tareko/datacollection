<?php
echo $this->Form->create($user);
echo $this->Form->input('last name');
echo $this->Form->input('first name');
echo $this->Form->input('birth_dt', [
    'label' => 'Date of birth',
    'minYear' => date('Y') - 70,
    'maxYear' => date('Y') - 18,
]);
echo $this->Form->select('Does Patient Have a Nova Scotia Health Card?', [
    'multiple' => true,
    
    'default' => [yes]
]);
echo $this->Form->select(
    'field',
    [No health card available, NB, PEI, NFLD, PQ, ON, MN, AL, SK, BC, NV, NWT, YK],
    ['empty' => '(choose one)']
);
echo $this->Form->input('health card number');
$options = ['M' => 'Male', 'F' => 'Female'];
echo $this->Form->select('gender', $options);
echo $this->Form->select('Does Patient Have a Canadian Address?', [
    'multiple' => true,
    
    'default' => [yes]
echo $this->Form->input('postal code');
echo $this->Form->input('city of residence');

echo $this->Form->button('Add');
echo $this->Form->end();
