class Restaurant:
    def __init__(self):
        self.menu_items = {}
        self.book_table = []
        self.customer_orders = []

    def add_item_to_menu(self, item_name, price):
        self.menu_items[item_name] = price

    def add_table_to_book(self, table_number):
        self.append(table_number)

    def add_item_to_customer_order(self, item_name, table_number):
         self.customer_orders[table_number] = []
         self.customer_orders[table_number].append(item_name)
         return f"Added {item_name} to table {table_number}'s order"
    
    def print_menu(self):
        print("Menu:")
        for item_name, price in self.menu_items.items():
            print(f"{item_name}: {price}")

    def print_table_reservations(self):
        print("Table Reservations:")
        for table_number, table_info in self.book_table.items():
            print(f"Table {table_number}: Capacity - {table_info['capacity']}")

    def print_customer_orders(self):
        print("Customer Orders:")
        for table_number, order in self.customer_orders.items():
            print(f"Table {table_number}: {order}")


restaurant = Restaurant()