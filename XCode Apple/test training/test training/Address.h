//
//  Address.h
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface Address : NSObject
@property (strong,nonatomic) NSString *streetaddress;
@property (strong,nonatomic) NSString *city;
@property (strong,nonatomic) NSString *state;
@property (strong,nonatomic) NSString *postalcode;

@end
