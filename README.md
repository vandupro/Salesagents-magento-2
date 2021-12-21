# Salesagents-magento-2
1. Introduction:
  Implement a system consisting of Sales Agent(SA)
  SA is a customer as well
  SA will be assigned with products, and receive commission when customer buy their product
2. New Attributes
  Customer: is_sales_agent(boolean)
  Product: sale_agent_id, commission_type(fixed/percent), commission_value
3. Tables
  entity_id
  order_id
  order_item_id
  order_item_sku
  order_item_price
  commission_type
  comission_value
  Be sure to apply an appropriate data type to each field. (You can edit the table structure if you feel
  necessary.
4. Features
  a. Backend:
    - Admin will be able to assign SA, commission type, value to each product
    - Commission report. Only do 1 out of 2 below:
      + According to Product, filterable by SKU with Ajax load
      + According to SA, filterable by Email with Ajax load
  b. Frontend:
    - When customer successfully place an order. SA will immediately receive commission.
    - WHen a SA logged in to his account, he can preview (somewhere in My Account) all product assigned
      to him (you should display this with a table).
      + Product name, sku, url to product
      + commission type, commision value.
  c. Global:
    - SA's first name will be displayed as "Sales Agent: <firstname>" instead of "<firstname>" on
      all pages of the website.
