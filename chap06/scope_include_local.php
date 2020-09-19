<?php
function checkScope() : String {
  require_once 'scope_include.php';
  return $scope;
}

print checkScope();
print $scope;