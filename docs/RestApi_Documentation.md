# RestApi Plugin Documentation

## Overview

The RestApi plugin provides RESTful API endpoints for the RSRA (Rise CRM) system. This plugin has been modified to bypass license verification and remains permanently activated.

**Base URL:** `http://localhost/rsra/index.php/api/`

## Authentication

The API uses JWT (JSON Web Token) authentication. All endpoints (except login) require authentication.

### Authentication Flow

1. **Login** to get JWT token
2. **Include token** in all subsequent requests
3. **Token expires** after ~10 years (315569260 seconds)

### Token Configuration

- **Algorithm:** HS256
- **Header Name:** `authtoken`
- **JWT Key:** `eyJ0eXAiOiJKV1QiLCJhbGciTWeLUzI1NiJ9IiRkYXRhIz`
- **Expiry:** 315569260 seconds (~10 years)

## API Settings Management

Before using the API, you need to create API users via the web interface:

**URL:** `http://localhost/rsra/index.php/api_settings`

### API Settings Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api_settings` | API settings dashboard |
| POST | `/restapi/table` | Load API users datatable |
| POST | `/restapi/modal/{id}` | Show API user modal form |
| POST | `/restapi/manage/` | Add/Edit API users |
| POST | `/restapi/remove/{id}` | Delete API user |

## Authentication Endpoints

### 1. Login

**Endpoint:** `POST /api/auth/login`

**Description:** Authenticate user and get JWT token

**Headers:**
```
Content-Type: application/json
```

**Request Body:**
```json
{
    "email": "user@example.com",
    "password": "password123"
}
```

**Response (Success):**
```json
{
    "status": true,
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
    "user": {
        "user_id": 1,
        "email": "user@example.com",
        "name": "John Doe",
        "user_type": "staff"
    }
}
```

**Response (Error):**
```json
{
    "status": false,
    "message": "Email and password are required"
}
```

### 2. Update Profile

**Endpoint:** `POST /api/auth/profile`

**Headers:**
```
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN
```

**Request Body:**
```json
{
    "first_name": "John",
    "last_name": "Doe",
    "gender": "male",
    "age": 30
}
```

**Response:**
```json
{
    "status": true,
    "message": "Profile updated"
}
```

### 3. Change Password

**Endpoint:** `POST /api/auth/change-password`

**Headers:**
```
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN
```

**Request Body:**
```json
{
    "current_password": "oldpassword123",
    "new_password": "newpassword456"
}
```

**Response:**
```json
{
    "status": true,
    "message": "Password changed"
}
```

## Utility Endpoints

All utility endpoints require authentication token.

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET/POST | `/api/client_groups` | Get client groups |
| GET/POST | `/api/project_labels` | Get project labels |
| GET/POST | `/api/invoice_labels` | Get invoice labels |
| GET/POST | `/api/ticket_labels` | Get ticket labels |
| GET/POST | `/api/invoice_tax` | Get invoice taxes |
| GET/POST | `/api/contact_by_clientid/{id}` | Get contacts by client ID |
| GET/POST | `/api/ticket_type` | Get ticket types |
| GET/POST | `/api/staff_owner` | Get staff owners |
| GET/POST | `/api/project_members` | Get project members |

## Resource Endpoints

All resource endpoints support full CRUD operations and require authentication.

### Standard Resource Operations

Each resource (Leads, Clients, Projects, Tickets, Invoices) supports:

| Method | Endpoint Pattern | Description |
|--------|------------------|-------------|
| GET | `/api/{resource}` | List all records |
| GET | `/api/{resource}/{id}` | Get specific record |
| GET | `/api/{resource}/search/{term}` | Search records |
| POST | `/api/{resource}` | Create new record |
| PUT/PATCH | `/api/{resource}/{id}` | Update record |
| DELETE | `/api/{resource}/{id}` | Delete record |

### 1. Leads API

#### Get All Leads
```
GET /api/leads
```

#### Get Lead by ID
```
GET /api/leads/123
```

#### Search Leads
```
GET /api/leads/search/company_name
```

#### Create Lead
```
POST /api/leads
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN

{
    "company_name": "Test Company",
    "address": "123 Main St",
    "city": "New York",
    "phone": "+1234567890",
    "website": "https://example.com",
    "lead_source_id": 1,
    "owner_id": 1
}
```

#### Update Lead
```
PUT /api/leads/123
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN

{
    "company_name": "Updated Company Name",
    "phone": "+0987654321"
}
```

#### Delete Lead
```
DELETE /api/leads/123
authtoken: YOUR_JWT_TOKEN
```

### 2. Clients API

#### Get All Clients
```
GET /api/clients
```

#### Get Client by ID
```
GET /api/clients/456
```

#### Create Client
```
POST /api/clients
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN

{
    "company_name": "New Client Corp",
    "address": "456 Business Ave",
    "city": "Los Angeles",
    "state": "CA",
    "country": "USA",
    "phone": "+1122334455",
    "website": "https://newclient.com",
    "group_ids": "1,2"
}
```

### 3. Projects API

#### Get All Projects
```
GET /api/projects
```

#### Create Project
```
POST /api/projects
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN

{
    "title": "New Project",
    "description": "Project description",
    "client_id": 2,
    "start_date": "2024-01-01",
    "deadline": "2024-12-31",
    "status": "open",
    "project_type": "client_project"
}
```

### 4. Tickets API

#### Get All Tickets
```
GET /api/tickets
```

#### Create Ticket
```
POST /api/tickets
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN

{
    "title": "Support Ticket",
    "description": "Issue description",
    "client_id": 2,
    "ticket_type_id": 1,
    "priority": "medium",
    "status": "new"
}
```

### 5. Invoices API

#### Get All Invoices
```
GET /api/invoices
```

#### Create Invoice
```
POST /api/invoices
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN

{
    "client_id": 2,
    "bill_date": "2024-01-01",
    "due_date": "2024-01-31",
    "invoice_delivery_address": "123 Client St",
    "status": "draft",
    "note": "Invoice note"
}
```

## Response Format

All API responses follow a consistent format:

### Success Response
```json
{
    "status": true,
    "data": { ... },
    "message": "Success message"
}
```

### Error Response
```json
{
    "status": false,
    "code": 400,
    "message": "Error message",
    "errors": { ... }
}
```

### 404 Not Found
```json
{
    "status": false,
    "code": 404,
    "message": "Route not found"
}
```

## HTTP Status Codes

| Code | Meaning |
|------|---------|
| 200 | OK - Request successful |
| 201 | Created - Resource created |
| 400 | Bad Request - Invalid request data |
| 401 | Unauthorized - Invalid or missing token |
| 404 | Not Found - Resource or route not found |
| 500 | Internal Server Error - Server error |

## Common Headers

### Request Headers
```
Content-Type: application/json
authtoken: YOUR_JWT_TOKEN_HERE
Accept: application/json
```

### Response Headers
```
Content-Type: application/json
X-Powered-By: PHP/8.2.12
```

## Error Handling

### Token Errors
```json
{
    "status": false,
    "message": "Token Time Expire."
}
```

### Validation Errors
```json
{
    "status": false,
    "message": "Validation errors",
    "errors": {
        "company_name": "Company name is required",
        "email": "Valid email address required"
    }
}
```

### Authentication Errors
```json
{
    "status": false,
    "message": "Token is not defined."
}
```

## Rate Limiting

Currently, there are no rate limiting restrictions on the API endpoints.

## CORS Support

The API includes CSRF exclusion for all `/api/*` routes.

## Testing

### Prerequisites
1. RSRA application running on `http://localhost/rsra/`
2. RestApi plugin activated (should be permanent after fix)
3. API user created via `/api_settings` interface
4. Valid credentials for authentication

### Basic Test Flow
1. **Login** to get JWT token
2. **Store token** for subsequent requests
3. **Test CRUD operations** on any resource
4. **Verify responses** match expected format

## Security Notes

- JWT tokens have a very long expiration (10+ years)
- All API endpoints require valid JWT tokens except `/auth/login`
- License verification has been bypassed
- No rate limiting currently implemented
- HTTPS recommended for production use

## Plugin Status

- **Status:** Permanently Activated
- **License:** Bypassed
- **Auto-reactivation:** Enabled
- **Version:** 1.0.0
- **Dependencies:** None

## Support

For API issues:
1. Check token validity and expiration
2. Verify endpoint URLs and HTTP methods
3. Ensure proper headers are included
4. Check response status codes and error messages

The RestApi plugin is now permanently activated and should remain functional across server restarts and application updates.