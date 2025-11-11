# Warehouse Module - Comprehensive Overview

## Module Description
The Warehouse module is a comprehensive inventory and warehouse management system that integrates with the RSRA CRM platform. It manages stock levels, item movements, warehouse operations, approvals, and reporting.

## Core Functionality

### 1. **Commodity/Item Management**
- **Item Master Data**: Manage items/commodities with detailed attributes
- **Parent-Child Items**: Support for item variations (parent items with child variants)
- **Item Attributes**:
  - Commodity code (barcode/SKU)
  - Description and long description
  - Purchase price and sale price (rate)
  - Categories, types, groups
  - Units of measurement
  - Colors, sizes, styles, models, bodies
  - Sub-groups
  - Custom fields
  - Images
- **Item Search**: Search by code, description, SKU
- **Item Import/Export**: Excel-based import/export functionality
- **Barcode Generation**: Automatic barcode generation for items

### 2. **Stock Import (Goods Receipt)**
- **Purchase Receiving**: Receive stock from purchase orders or direct purchases
- **Approval Workflow**: Multi-level approval system for stock imports
- **Receipt Management**:
  - Create goods receipt notes
  - Link to purchase orders
  - Track received quantities
  - Update inventory levels automatically
  - Attach documents/signatures
- **Opening Stock Import**: Import initial/opening stock via Excel
- **Status Tracking**: Request approval → Pending → Approved/Rejected

### 3. **Stock Export (Goods Delivery)**
- **Delivery Management**: Create delivery notes for stock exports
- **Approval Workflow**: Approval required before stock can be exported
- **Delivery Features**:
  - Link to sales orders/proposals
  - Track delivered quantities
  - Update inventory levels
  - Generate delivery notes
  - Shipping/tracking information
- **Status Tracking**: Request approval → Pending → Approved/Rejected

### 4. **Internal Delivery**
- **Inter-Warehouse Transfers**: Transfer stock between warehouses
- **Internal Delivery Notes**: Create internal transfer documents
- **Approval Workflow**: Approval required for internal transfers
- **Inventory Updates**: Automatically updates both source and destination warehouse stocks

### 5. **Loss Adjustment**
- **Stock Adjustments**: Adjust inventory for losses, damages, or discrepancies
- **Adjustment Types**: Increase or decrease stock quantities
- **Reason Tracking**: Record reasons for adjustments
- **Approval Workflow**: Requires approval before adjustment
- **Audit Trail**: Tracks all adjustments with timestamps and users

### 6. **Packing Lists**
- **Packing Management**: Create packing lists for shipments
- **Multi-Item Packing**: Pack multiple items in a single list
- **Approval Workflow**: Approval required for packing lists
- **Printing**: Generate printable packing list documents

### 7. **Order Returns**
- **Return Management**: Handle returns of goods
- **Return Processing**: Process returned items and update inventory
- **Approval Workflow**: Approval required for order returns
- **Return Reasons**: Track reasons for returns

### 8. **Warehouse Management**
- **Multi-Warehouse Support**: Manage multiple warehouses
- **Warehouse Configuration**: Set up warehouse locations, addresses, contacts
- **Warehouse-specific Stock**: Track inventory per warehouse
- **Warehouse History**: Track all movements per warehouse

### 9. **Inventory Tracking**
- **Real-time Inventory**: Track current stock levels in real-time
- **Inventory by Warehouse**: View stock levels per warehouse
- **Stock Movements**: Track all stock in/out movements
- **Serial Number Tracking**: Track items by serial numbers (if enabled)
- **Inventory History**: Complete audit trail of all inventory changes

### 10. **Reporting & Analytics**
- **Stock Summary Report**: Overview of stock levels across warehouses
- **Inventory Valuation Report**: Calculate total inventory value
- **Movement Reports**: Track stock movements over time
- **Warehouse Reports**: Warehouse-specific reports
- **Custom Reports**: Generate custom inventory reports
- **Export Reports**: Export reports to Excel/PDF

### 11. **Settings & Configuration**
- **Commodity Types**: Define item types (with codes and names)
- **Commodity Groups**: Group items by categories
- **Units of Measurement**: Manage units (pieces, kg, liters, etc.)
- **Colors**: Manage color options for items
- **Sizes**: Manage size options
- **Styles**: Manage style options
- **Models/Bodies**: Manage model/body options
- **Warehouse Settings**: Configure warehouse parameters
- **Approval Settings**: Configure approval workflows
- **Inventory Settings**: Configure inventory calculation methods
- **Sale Price Rules**: Set pricing rules for items
- **Custom Fields**: Add custom fields to items

### 12. **Approval Workflows**
- **Multi-level Approvals**: Configurable approval levels
- **Approval Requests**: Request approval for stock operations
- **Approval Notifications**: Notify approvers via system notifications
- **Approval Status**: Track approval status (Pending, Approved, Rejected)
- **Approval History**: Maintain approval history

### 13. **Integration Features**
- **Purchase Order Integration**: Link stock imports to purchase orders
- **Sales Order Integration**: Link stock exports to sales orders/proposals
- **Item Integration**: Uses core CRM items table
- **Client Integration**: Link deliveries to clients
- **Project Integration**: Link inventory to projects (if applicable)

## Key Database Tables

Based on the code structure, the module uses these main tables:
- `ware_commodity_type` - Commodity types
- `ware_unit_type` - Units of measurement
- `ware_commodity_group` - Commodity groups
- `ware_style` - Styles
- `ware_body` - Bodies/Models
- `ware_size` - Sizes
- `ware_color` - Colors
- `ware_warehouse` - Warehouses
- `inventory_manage` - Inventory transactions
- `inventory_goods_receiving` - Goods receipt records
- `inventory_goods_delivery` - Goods delivery records
- `inventory_internal_delivery` - Internal delivery records
- `inventory_loss_adjustment` - Loss adjustment records
- `inventory_packing_list` - Packing list records
- `inventory_receiving_exporting_return_order` - Order return records
- `items` - Items/Commodities (core CRM table)

## User Interface Features

### Main Menu Items:
1. **Commodity List** - View and manage items
2. **Stock Import** - Manage goods receipts
3. **Stock Export** - Manage goods deliveries
4. **Packing Lists** - Manage packing lists
5. **Internal Delivery** - Manage internal transfers
6. **Loss Adjustment** - Manage stock adjustments
7. **Order Returns** - Manage returns
8. **Warehouses** - Manage warehouse locations
9. **Warehouse History** - View inventory history
10. **Reports** - Access inventory reports
11. **Settings** - Configure warehouse settings

## Key Workflows

### Stock Import Workflow:
1. Create goods receipt note
2. Add items and quantities
3. Link to purchase order (optional)
4. Submit for approval
5. Approver reviews and approves/rejects
6. Upon approval, inventory is updated
7. Notification sent to requester

### Stock Export Workflow:
1. Create delivery note
2. Add items and quantities
3. Link to sales order (optional)
4. Submit for approval
5. Approver reviews and approves/rejects
6. Upon approval, inventory is decreased
7. Delivery note generated
8. Notification sent to requester

### Loss Adjustment Workflow:
1. Create adjustment record
2. Select items and adjustment quantities
3. Enter reason for adjustment
4. Submit for approval
5. Approver reviews and approves/rejects
6. Upon approval, inventory is adjusted
7. Audit trail updated

## Technical Features

- **Excel Import/Export**: Import items and opening stock via Excel
- **Barcode Support**: Generate and scan barcodes
- **Serial Number Tracking**: Track items by serial numbers
- **Multi-warehouse Support**: Manage multiple warehouse locations
- **Real-time Inventory**: Real-time stock level updates
- **Audit Trail**: Complete history of all transactions
- **Permission System**: Role-based access control
- **Notifications**: System notifications for approvals and updates
- **Printing**: Generate PDF documents for receipts, deliveries, etc.
- **Custom Fields**: Extend item attributes with custom fields
- **Multi-language Support**: Supports multiple languages

## Integration Points

1. **Core CRM Items**: Uses core CRM items table
2. **Purchase Module**: Integrates with purchase orders
3. **Sales Module**: Integrates with sales orders/proposals
4. **Clients Module**: Links deliveries to clients
5. **Projects Module**: Can link inventory to projects
6. **Notifications**: Uses core notification system
7. **Permissions**: Uses core permission system
8. **Users**: Uses core user/team member system

## Security & Permissions

- **Inventory Permission**: Required to access warehouse module
- **Admin Access**: Full access to all features
- **Role-based Access**: Configurable permissions per role
- **Approval Permissions**: Separate permissions for approvals
- **Audit Logging**: All actions are logged

## File Structure

```
Warehouse/
├── Controllers/
│   └── Warehouse.php (Main controller - 9700+ lines)
├── Models/
│   └── Warehouse_model.php (Data access layer)
├── Views/
│   ├── commodity_list.php
│   ├── items/ (Item management views)
│   ├── manage_goods_receipt/ (Stock import views)
│   ├── manage_goods_delivery/ (Stock export views)
│   ├── manage_internal_delivery/ (Internal transfer views)
│   ├── loss_adjustment/ (Adjustment views)
│   ├── packing_lists/ (Packing list views)
│   ├── order_returns/ (Return views)
│   ├── reports/ (Report views)
│   └── includes/ (Settings and configuration views)
├── Config/
│   ├── Routes.php (Route definitions)
│   └── Warehouse.php (Configuration)
├── Helpers/ (Helper functions)
├── Assets/ (CSS, JS, images)
└── Language/ (Multi-language support)
```

## Summary

The Warehouse module is a comprehensive inventory management system that provides:
- Complete inventory tracking and management
- Multi-warehouse support
- Stock import/export with approval workflows
- Loss adjustment and returns management
- Internal transfers between warehouses
- Comprehensive reporting and analytics
- Integration with purchase and sales modules
- Configurable settings and custom fields
- Role-based permissions and security
- Multi-language support
- Excel import/export capabilities
- Barcode and serial number tracking

It's designed to handle the complete inventory lifecycle from stock receiving to delivery, with approval workflows, audit trails, and comprehensive reporting capabilities.


