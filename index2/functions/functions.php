<?php
/**
 * function to get the categories list from a lst of ids
 *
 * @param Array $ids a list of ids
 * @param Array $availableCategories a list of all the categories available
 * @return Array the list of categories
 */
function getCategoriesFromIds($ids, $availableCategories){
    $categories = [];
    if(count($ids) === 0){
        //if no ids passed, return empty list
        return $categories;
    }
    foreach ($availableCategories as $availableCategory) {
        //foreach categoies available and
        foreach ($ids as $id) {
            //foreach ids
            //check if they match, id exist in list (are the same)
            if($availableCategory['id'] === $id){
                // then push the name of the category
                $categories[] = $availableCategory['name'];
            }
        }
    }
    return $categories;
}