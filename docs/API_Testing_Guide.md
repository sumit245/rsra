# RSRA RestApi Testing Guide

## Overview

This guide provides comprehensive instructions for testing the RSRA RestApi plugin using Postman and other testing tools.

## Prerequisites

1. **RSRA Application Running**: Ensure your RSRA application is running at `http://localhost/rsra/`
2. **RestApi Plugin Active**: The plugin should be permanently activated (after applying the fix)
3. **Postman Installed**: Download from [https://www.postman.com/downloads/](https://www.postman.com/downloads/)
4. **Valid User Account**: You need credentials for a user in the RSRA system

## Postman Environment Setup

### 1. Create New Environment

1. Open Postman
2. Click "Environments" in the left sidebar
3. Click "Create Environment"
4. Name it "RSRA Local"

### 2. Set Environment Variables

Add the following variables to your environment:

| Variable | Initial Value | Current Value |
|----------|---------------|---------------|
| `base_url` | `http://localhost/rsra/index.php` | `http://localhost/rsra/index.php` |
| `jwt_token` | | (will be set automatically after login) |
| `user_id` | | (will be set automatically after login) |

### 3. Save Environment

Click "Save" and make sure to select "RSRA Local" as your active environment.

## Authentication Setup

### Step 1: Login Request

Create a new POST request:

**URL**: `{{base_url}}/api/auth/login`

**Headers**:
```
Content-Type: application/json
```

**Body** (raw JSON):
```json
{
    "email": "your-email@example.com",
    "password": "your-password"
}
```

**Tests Script** (to automatically save token):
```javascript
if (pm.response.code === 200) {
    const response = pm.response.json();
    if (response.status === true && response.token) {
        pm.environment.set('jwt_token', response.token);
        pm.environment.set('user_id', response.user.user_id);
        console.log('JWT Token saved to environment:', response.token);
    }
}

pm.test('Status code is 200', function () {
    pm.response.to.have.status(200);
});

pm.test('Response has token', function () {
    const jsonData = pm.response.json();
    pm.expect(jsonData.status).to.eql(true);
    pm.expect(jsonData.token).to.exist;
});
```

### Step 2: Test Login

1. Send the login request
2. Verify you receive a response like:
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
3. Check that `jwt_token` and `user_id` are now set in your environment variables

## Testing API Endpoints

### Standard Request Headers

For all authenticated requests, include these headers:

```
Content-Type: application/json
authtoken: {{jwt_token}}
```

### 1. Test Utilities Endpoints

#### Get Client Groups
```
GET {{base_url}}/api/client_groups
Headers: authtoken: {{jwt_token}}
```

#### Get Project Labels
```
GET {{base_url}}/api/project_labels
Headers: authtoken: {{jwt_token}}
```

### 2. Test CRUD Operations - Leads

#### Get All Leads
```
GET {{base_url}}/api/leads
Headers: authtoken: {{jwt_token}}
```

#### Create a Lead
```
POST {{base_url}}/api/leads
Headers: 
  Content-Type: application/json
  authtoken: {{jwt_token}}

Body:
{
    "company_name": "Test Company API",
    "address": "123 Main Street",
    "city": "New York",
    "state": "NY",
    "zip": "10001",
    "country": "USA",
    "phone": "+1234567890",
    "website": "https://testcompany.com",
    "lead_source_id": 1,
    "owner_id": 1,
    "created_by": 1
}
```

#### Get Lead by ID
```
GET {{base_url}}/api/leads/1
Headers: authtoken: {{jwt_token}}
```

#### Update Lead
```
PUT {{base_url}}/api/leads/1
Headers: 
  Content-Type: application/json
  authtoken: {{jwt_token}}

Body:
{
    "company_name": "Updated Company Name",
    "phone": "+0987654321"
}
```

#### Delete Lead
```
DELETE {{base_url}}/api/leads/1
Headers: authtoken: {{jwt_token}}
```

### 3. Test CRUD Operations - Clients

#### Get All Clients
```
GET {{base_url}}/api/clients
Headers: authtoken: {{jwt_token}}
```

#### Create Client
```
POST {{base_url}}/api/clients
Headers: 
  Content-Type: application/json
  authtoken: {{jwt_token}}

Body:
{
    "company_name": "New Client Corp",
    "address": "456 Business Avenue",
    "city": "Los Angeles",
    "state": "CA",
    "zip": "90210",
    "country": "USA",
    "phone": "+1122334455",
    "website": "https://newclient.com",
    "currency_symbol": "USD",
    "group_ids": "1,2",
    "owner_id": 1,
    "created_by": 1
}
```

### 4. Test CRUD Operations - Projects

#### Create Project
```
POST {{base_url}}/api/projects
Headers: 
  Content-Type: application/json
  authtoken: {{jwt_token}}

Body:
{
    "title": "New API Project",
    "description": "Project created via REST API",
    "client_id": 2,
    "start_date": "2024-01-01",
    "deadline": "2024-12-31",
    "status": "open",
    "project_type": "client_project",
    "price": 5000.00,
    "created_by": 1
}
```

### 5. Test CRUD Operations - Tickets

#### Create Ticket
```
POST {{base_url}}/api/tickets
Headers: 
  Content-Type: application/json
  authtoken: {{jwt_token}}

Body:
{
    "title": "API Support Ticket",
    "description": "Support ticket created via REST API",
    "client_id": 2,
    "ticket_type_id": 1,
    "priority": "medium",
    "status": "new",
    "assigned_to": 1,
    "created_by": 1
}
```

### 6. Test CRUD Operations - Invoices

#### Create Invoice
```
POST {{base_url}}/api/invoices
Headers: 
  Content-Type: application/json
  authtoken: {{jwt_token}}

Body:
{
    "client_id": 2,
    "bill_date": "2024-01-01",
    "due_date": "2024-01-31",
    "invoice_delivery_address": "123 Client St",
    "status": "draft",
    "note": "Invoice created via API"
}
```

## cURL Testing Examples

If you prefer command line testing, here are cURL examples:

### Login with cURL
```bash
curl -X POST http://localhost/rsra/index.php/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{
    "email": "your-email@example.com",
    "password": "your-password"
  }'
```

### Get Leads with cURL
```bash
curl -X GET http://localhost/rsra/index.php/api/leads \
  -H "authtoken: YOUR_JWT_TOKEN_HERE"
```

### Create Lead with cURL
```bash
curl -X POST http://localhost/rsra/index.php/api/leads \
  -H "Content-Type: application/json" \
  -H "authtoken: YOUR_JWT_TOKEN_HERE" \
  -d '{
    "company_name": "Test Company",
    "address": "123 Main St",
    "city": "New York",
    "phone": "+1234567890",
    "lead_source_id": 1,
    "owner_id": 1
  }'
```

## Response Formats

### Success Response Example
```json
{
    "status": true,
    "data": {
        "id": 1,
        "company_name": "Test Company",
        "created_date": "2024-01-01"
    },
    "message": "Success"
}
```

### Error Response Example
```json
{
    "status": false,
    "code": 400,
    "message": "Validation failed",
    "errors": {
        "company_name": "Company name is required"
    }
}
```

### Authentication Error Example
```json
{
    "status": false,
    "message": "Token is not defined."
}
```

## Testing Checklist

### ✅ Basic Authentication
- [ ] Login successfully returns JWT token
- [ ] Token is saved to environment variables
- [ ] Subsequent requests use token correctly

### ✅ Utility Endpoints
- [ ] Get client groups
- [ ] Get project labels
- [ ] Get invoice labels
- [ ] Get ticket labels
- [ ] Get invoice taxes
- [ ] Get contacts by client ID
- [ ] Get ticket types
- [ ] Get staff owners
- [ ] Get project members

### ✅ CRUD Operations - Leads
- [ ] Get all leads
- [ ] Get lead by ID
- [ ] Search leads
- [ ] Create new lead
- [ ] Update existing lead
- [ ] Delete lead

### ✅ CRUD Operations - Clients
- [ ] Get all clients
- [ ] Get client by ID
- [ ] Search clients
- [ ] Create new client
- [ ] Update existing client
- [ ] Delete client

### ✅ CRUD Operations - Projects
- [ ] Get all projects
- [ ] Get project by ID
- [ ] Search projects
- [ ] Create new project
- [ ] Update existing project
- [ ] Delete project

### ✅ CRUD Operations - Tickets
- [ ] Get all tickets
- [ ] Get ticket by ID
- [ ] Search tickets
- [ ] Create new ticket
- [ ] Update existing ticket
- [ ] Delete ticket

### ✅ CRUD Operations - Invoices
- [ ] Get all invoices
- [ ] Get invoice by ID
- [ ] Search invoices
- [ ] Create new invoice
- [ ] Update existing invoice
- [ ] Delete invoice

## Troubleshooting

### Common Issues

#### 1. "Token is not defined" Error
- **Cause**: Missing or incorrect authtoken header
- **Solution**: Ensure you include `authtoken: {{jwt_token}}` in request headers
- **Check**: Verify jwt_token is set in environment variables

#### 2. "Token Time Expire" Error
- **Cause**: JWT token has expired (though ours is set for 10+ years)
- **Solution**: Login again to get a new token

#### 3. "Route not found" Error (404)
- **Cause**: Incorrect API endpoint URL
- **Solution**: Check the endpoint path and HTTP method
- **Verify**: Base URL is correct (`http://localhost/rsra/index.php`)

#### 4. "Validation errors" (400)
- **Cause**: Missing required fields or invalid data
- **Solution**: Check the request body against API documentation
- **Verify**: All required fields are included

#### 5. Plugin Not Working
- **Cause**: RestApi plugin might be deactivated
- **Solution**: Run activation script:
  ```bash
  php activate_restapi_simple.php
  ```
- **Verify**: Check activated_plugins.json contains "RestApi"

### Debug Steps

1. **Check Plugin Status**:
   ```bash
   cat app/Config/activated_plugins.json
   ```

2. **Test API Settings Page**:
   Navigate to `http://localhost/rsra/index.php/api_settings`

3. **Check Server Logs**:
   Look at Apache error logs for PHP errors

4. **Verify Database Connection**:
   Ensure RSRA application is working normally

5. **Test Basic Endpoint**:
   Try a simple GET request to verify API is responding

## Performance Testing

### Load Testing with Apache Bench
```bash
# Test login endpoint
ab -n 100 -c 10 -p login.json -T application/json http://localhost/rsra/index.php/api/auth/login

# Test GET endpoint with authentication
ab -n 100 -c 10 -H "authtoken: YOUR_TOKEN" http://localhost/rsra/index.php/api/leads
```

### Rate Limiting
Currently, there are no rate limits implemented on the API endpoints.

## Security Considerations

1. **HTTPS**: Use HTTPS in production environments
2. **Token Storage**: Store JWT tokens securely
3. **Token Rotation**: Consider implementing token rotation for production
4. **Input Validation**: All inputs are validated server-side
5. **SQL Injection**: Framework provides protection against SQL injection

## Next Steps

1. **Create Collection**: Import all requests into a Postman collection
2. **Automated Testing**: Set up Newman for automated API testing
3. **Documentation**: Generate API documentation from Postman collection
4. **Integration**: Integrate API endpoints with your application

## Support

For issues with the API:
1. Verify RestApi plugin is activated
2. Check authentication token is valid
3. Review request format and required fields
4. Check server error logs for detailed error messages

The RestApi plugin is now permanently activated and should provide consistent API access for your RSRA system.